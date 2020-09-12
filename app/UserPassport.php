<?php

namespace App;

use Laravel\Passport\HasApiTokens;

class UserPassport extends \Bendt\Auth\Models\User
{
    use HasApiTokens;

    public function findForPassport($username) {
        $user = $this->where('username', $username)->first();
        $email = $this->where('email', $username)->first();

        if($user !== null && $user->status_id == 0 || $email !== null && $email->status_id == 0) {
            throw new OAuthServerException('Your account may not be used at the moment.', 6, 'account_inactive', 401);
        } else if($user !== null) {
            return $user;
        } else {
            return $email;
        }
    }

    public function ZauthAcessToken(){
        return $this->hasMany('\App\OauthAccessToken');
    }
}
