const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.styles([
			    'bootstrap.css',
			    'style.css',
			    'animate.min.css'
				])
				.scripts([
			    'jquery-1.11.1.min.js', 
			    'bootstrap.min.js',
			    'wow.min.js'
				])
});
