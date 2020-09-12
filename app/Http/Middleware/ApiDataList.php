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

class ApiDataList
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $origin = $request->headers->get('origin'); //http://localhost:3000
        $referer = $request->headers->get('referer'); //http://localhost:3000/system/hotel
        if($origin && $referer) {
            $origin_path = str_replace($origin, '', $referer); //system/hotel
            $request->attributes->add(['origin_path' => $origin_path]);

            //$url = $request->url();       //http://localost:8000/api/hotel
            //$path = $request->path();     //api/hotel

            $modules = stores('module_slug');
            if(array_key_exists($origin_path, $modules) || array_key_exists(substr($origin_path,0,-1), $modules)) {
                $request->attributes->add(['list_type' => 'index']);
            } else {
                $request->attributes->add(['list_type' => 'common']);
            }
        } else {
            $request->attributes->add(['list_type' => 'index']);
        }

        return $next($request);
    }
}
