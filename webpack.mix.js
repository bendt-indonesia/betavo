const mix = require('laravel-mix');

mix.scripts([
    "resources/js/vendor/jquery-1.12.4.min.js",
    "resources/js/vendor/vegas/vegas.min.js",
    "resources/js/vendor/swiper/swiper.min.js",
    "resources/js/vendor/fullpage/scrolloverflow.min.js",
    "resources/js/vendor/fullpage/jquery.fullpage.min.js",
    "resources/js/vendor/form/jqueryvalidation.min.js",
    "resources/js/vendor/form/form_script.js",
    "resources/js/vendor/bootstrap/js/bootstrap.js",
    "resources/js/vendor/classie.js",
    "resources/js/vendor/animated-menu/segment.min.js",
], 'public/js/vendor.min.js')
    .js('resources/js/app.js', 'public/js/app.min.js')
    .sass('resources/sass/app.scss', 'public/css/app.min.css');

if(mix.inProduction()) {
    mix.version();
} else {
    mix.disableNotifications();
}
