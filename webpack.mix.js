const mix = require('laravel-mix');

mix.js('src/resources/assets/js/verkooppunten-app.js', 'src/public/js')
  .sass('src/resources/assets/sass/verkooppunten-app.scss', 'src/public/css');