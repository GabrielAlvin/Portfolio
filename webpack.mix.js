const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.setPublicPath('public')
mix.setResourceRoot('../');

mix 
    //Arquivos Sass
    .sass('resources/sass/app.scss', 'public/css/app.css')

    //Style
    .css('resources/css/style.css', 'public/css/style.css')

    //Scripts
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/js/bootstrap.blundle.js')
    .scripts('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js')
    .scripts('node_modules/vide/dist/jquery.vide.js', 'public/js/jquery.vide.js')
    .scripts('resources/js/main.js', 'public/js/main.js')

    //Font Awesome
    .copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts')

    //SourceMaps
    .sourceMaps()

    //Versionamento
    .version();
