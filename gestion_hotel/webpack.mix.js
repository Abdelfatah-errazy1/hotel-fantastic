const mix = require('laravel-mix');
const babel = require('babel-preset-env');

mix.js('resources/js/app.js', 'public/js')
   .babel('public/js/app.js', 'public/js/app.js', {
       presets: [babel],
   });
