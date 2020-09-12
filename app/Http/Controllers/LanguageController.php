<?php
/*
 *
  ____                 _ _     _____           _                       _
 |  _ \               | | |   |_   _|         | |                     (_)
 | |_) | ___ _ __   __| | |_    | |  _ __   __| | ___  _ __   ___  ___ _  __ _
 |  _ < / _ \ '_ \ / _` | __|   | | | '_ \ / _` |/ _ \| '_ \ / _ \/ __| |/ _` |
 | |_) |  __/ | | | (_| | |_   _| |_| | | | (_| | (_) | | | |  __/\__ \ | (_| |
 |____/ \___|_| |_|\__,_|\__| |_____|_| |_|\__,_|\___/|_| |_|\___||___/_|\__,_|

 Please don't modify this file because it may be overwritten when re-generated.
 */

namespace App\Http\Controllers;

class LanguageController extends Controller
{
    public function setLocale($locale)
    {
        $locale = locale()->isSupported($locale) ? $locale : locale()->fallback();
        locale()->set($locale);

        $previous_url = \URL::previous();
        $exp = explode('/',$previous_url);
        $final = "";
        foreach ($exp as $index => $row) {
            if($index > 3)
            {
                $final = $final ."/".$row;
            }
        }
        $redirect = url('/').'/'.$locale.$final;

        return redirect($redirect);
    }
}
