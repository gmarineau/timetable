const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
  mix
  .copy(
    'node_modules/font-awesome/fonts',
    'public/fonts'
  )
  .copy(
    'node_modules/bootstrap/fonts/',
    'public/fonts/'
  )
  // Compile styles and scripts
  .styles([
    '../../../node_modules/bootstrap/dist/css/bootstrap.css',
    'style.css',
  ], 'public/css/')
  .scripts([
    '../../../node_modules/jquery/dist/jquery.js',
    '../../../node_modules/bootstrap/dist/js/bootstrap.js',
    'script.js',
  ], 'public/js/all.js');
});
