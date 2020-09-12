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

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class RequiredLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $desiredLocale = $request->segment(1);

        $locale = Session::has(env('LOCALE_SESS')) ? Session::get(env('LOCALE_SESS')) : locale()->fallback();
        $locale = locale()->isSupported($desiredLocale) ? $desiredLocale : $locale;

        if($desiredLocale != $locale) {
            return redirect(url($locale."/".$request->path()),301);
        }

        Session::put(env('LOCALE_SESS'), $locale);
        locale()->set($locale);

        return $next($request);
    }
}
