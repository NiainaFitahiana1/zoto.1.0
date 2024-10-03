const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),
   ]);
   
mix.scripts([
    'node_modules/@popperjs/core/dist/umd/popper.js',
    'node_modules/chart.js/dist/chart.js'
], 'public/js/vendor.js');

mix.copy('node_modules/@fontsource/figtree/index.css', 'public/css/figtree.css')
   .copy('node_modules/boxicons/css/boxicons.min.css', 'public/css/boxicons.min.css')
   .copy('node_modules/remixicon/fonts/remixicon.css', 'public/css/remixicon.css');