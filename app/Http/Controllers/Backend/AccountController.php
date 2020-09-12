<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{

    /**
     * Get Current User Details
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function details(Request $request) {
        $user = Auth::user();
        return view('backend.account.details', [
            'model' => $user
        ]);
    }

    /**
     * Update User Data
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveDetails(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $user = User::find(Auth::user()->id);
        $user->fill($request->input());
        $user->save();

        $request->session()->flash('success', 'Account Updated!');
        return back();
    }

    /**
     * Change Password Form
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request) {
        $user = Auth::user();

        return view('backend.account.change-password', [
            'user' => $user
        ]);
    }

    /**
     * Process Change Password Form
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePasswordPost(Request $request)
    {
        $messages = [
            'current_password.required' => 'Current Password must be filled',
            'new_password.required' => 'New Password must be filled',
            'repeat_password.required' => 'Repeat Password must be filled',

            'current_password.min' => 'Password must be at least 5 characters',
            'new_password.min' => 'Password must be at least 5 characters',
            'repeat_password.min' => 'Password must be at least 5 characters',

            'repeat_password.same' => 'Repeat Password not same as New Password'
        ];
        $this->validate($request, [
            'current_password' => 'min:4|required',
            'new_password' => 'min:5|required',
            'repeat_password' => 'same:new_password|min:5|required',
        ],$messages);

        $objArray = $request->input();
        $user = Auth::user();

        if (Hash::check($objArray['current_password'], $user->password)) {
            $user_model = User::find($user->id);
            $user_model->password = Hash::make($objArray['new_password']);
            $user_model->save();
            $request->session()->flash('success', 'Password Updated');
            return redirect()->route('backend.account');
        } else {
            throw new \Exception('Incorrect current password, please try again.');
        }
    }
}