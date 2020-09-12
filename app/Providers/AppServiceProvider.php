<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        Validator::extend('option', function ($attribute, $value, $parameters, $validator) {
            $option = stores('option')->firstWhere('slug',$parameters[0]);

            if(!$option) return false;

            foreach ($option->option_detail as $opt) {
                if($opt->id === (int) $value) return true;
            }

            return false;
        });

        Validator::extend('is_valid_image',function($attribute, $value, $params, $validator) {
            $image = base64_decode($value);
            $f = finfo_open();
            $result = finfo_buffer($f, $image, FILEINFO_MIME_TYPE);
            return $result == 'image/png' || $result == 'image/jpg' || $result == 'image/jpeg';
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
