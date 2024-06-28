let mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/build/assets/");
mix.css("resources/css/d_main.css", "public/build/assets/");
mix.css("resources/css/d_hero.css", "public/build/assets/");
mix.css("resources/css/d_footer.css", "public/build/assets/");
mix.css("resources/css/d_productCard.css", "public/build/assets/");

mix.css("resources/css/m_main.css", "public/build/assets/");
mix.css("resources/css/m_searchBar.css", "public/build/assets/");
mix.css("resources/css/m_hero.css", "public/build/assets/");
mix.css("resources/css/m_productCard.css", "public/build/assets/");
mix.css("resources/css/m_footer.css", "public/build/assets/");
