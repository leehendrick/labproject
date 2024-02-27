const  mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .js('resources/js/routes/index.js', 'public/js')
.postCss('resources/css/app.css', 'public/css',[
        require('tailwindcss')
]);