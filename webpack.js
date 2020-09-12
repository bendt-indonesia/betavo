const mix = require('laravel-mix');

mix.scripts([
    "resources/js/example.js",
], 'public/js/vendor.min.js')
.js('resources/js/app.js', 'public/js/app.min.js')
.sass('resources/sass/app.scss', 'public/css/app.min.css');

if(mix.inProduction()) {
    mix.version();
} else {
    mix.disableNotifications();
}
