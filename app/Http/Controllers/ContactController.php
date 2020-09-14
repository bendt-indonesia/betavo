<?php

namespace App\Http\Controllers;

use App\Models\ClientMessages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use Mail;
use Validator;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('contact',[
            'contact' => \CMSPage::get('contact'),
        ]);
    }

    public function store($data, $ip) {
        $message = new ClientMessages($data);
        $message->origin = $ip;
        $message->process();
    }

    public function sendContactForm(Request $request){
        $validator = Validator::make($request->all(), $this->validator(),$this->validator_message());

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->input())->withErrors($validator)->send();
        }

        $this->sendContactEmail($request);

        return redirect('contact')->with('success', "Your message has been successfully sent!");
    }

    public function sendContactFormAJAX(Request $request){

        $validator = Validator::make($request->all(), $this->validator(),$this->validator_message());

        if ($validator->fails()) {
            return response()->json(['message' => 'Maaf, gagal mengirim.'], 500);
        }

        $this->sendContactEmail($request);
        $this->store($request->input(), $request->ip());

        return response()->json(['message' => 'Terima kasih.'], 201);
    }

    private function sendContactEmail($request) {

        if(env('EMAIL_ENABLED')) {

            $admin_email = explode(',', conval('mail_admin_recipients'));

            $data = $request->all();
            //Email to User
            Mail::send('mail.contact', ['data'=>$data], function ($m) use ($data) {
                $m->from('do-not-reply@'.env('APP_DOMAIN'), 'Contact '.env('APP_NAME'));

                $m->to($data['email'], $data['name'])->subject(\CMSConfig::get('mail_visitor_subject'));
            });

            //Email to Admin
            Mail::send('mail.contact', ['data'=>$data, 'admin_email'=>$admin_email], function ($m) use ($data,$admin_email) {
                $m->from('do-not-reply@'.env('APP_DOMAIN'), 'Contact '.env('APP_NAME'));

                $m->to($admin_email)->subject(\CMSConfig::get('mail_admin_subject'));
            });

        } else {
            return true;
        }
        return false;
    }

    private function validator() {
        return [
            'name' => 'max:50|required',
            'email' => 'email|max:50|required',
            'message' => 'min:10|max:1000|required',
            'phone' => 'max:35|required',
        ];
    }

    private function validator_message() {
        return [
            'name.max' => 'Name too long',
            'name.required' => 'Please tell us your name',
            'email' => 'Please check your email address (Invalid)',
            'email.required' => 'Please check your email address (Invalid)',
            'phone.max' => 'Phone no longer than 35 numbers',
            'phone.required' => 'Please fill the Phone',
            'message.required' => 'Message too short!',
            'message.min' => 'Message too short, minimal 10 characters.',
            'message.max' => 'Message length exceeded 1000 characters.',
        ];
    }
}
