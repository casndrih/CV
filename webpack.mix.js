const mix = require('laravel-mix');

const tailwindcss = require('tailwindcss');
const postcssImport = require('postcss-import');
const autoprefixer = require('autoprefixer');

mix.js('resources/js/app.js', 'public/js')
    .postCss("resources/css/app.css", "public/css", [
        tailwindcss(),
        postcssImport(),
        autoprefixer(),
    ])
    .copyDirectory('resources/images', 'public/images');