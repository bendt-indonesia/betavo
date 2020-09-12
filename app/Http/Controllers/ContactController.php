<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use Mail;
use Validator;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('contact',[
            'page' => \CMSPage::get('contact'),
        ]);
    }

    public function sendContactForm(Request $request){
        $messages = [
            'name.max' => 'Name too long',
            'name.required' => 'Please tell us your name',
            'subject.max' => 'Subject no longer than 255 characters',
            'subject.required' => 'Please fill the Subject',
            'email' => 'Please check your email address (Invalid)',
            'email.required' => 'Please check your email address (Invalid)',
            'phone.max' => 'Phone no longer than 35 numbers',
            'phone.required' => 'Please fill the Phone',
            'message.required' => 'Message too short!',
            'message.min' => 'Message too short, minimal 10 characters.',
            'message.max' => 'Message length exceeded 1000 characters.',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'max:50|required',
            'email' => 'email|max:50|required',
            'subject' => 'max:255|required',
            'message' => 'min:10|max:1000|required',
            'phone' => 'max:35|required',
        ],$messages);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->input())->withErrors($validator)->send();
        }

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
        }

        return redirect('contact')->with('success', "Your message has been successfully sent!");
    }

}
