<?php

namespace App;

use App\User;

class StoreMapper
{
    public static function MAP($key)
    {
        switch ($key)
        {
            case 'users':
                return function() { return User::all(); };
            default:
                return null;
        }
    }
}
