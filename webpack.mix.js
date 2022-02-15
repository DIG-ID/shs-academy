// webpack.mix.js

let mix = require('laravel-mix');

mix
  .setPublicPath('dist')
  .setResourceRoot('./')
  .disableNotifications()
  .autoload({
    jquery: ['$', 'window.jQuery']
  })
  .js('src/js/main.js', 'dist').setPublicPath('dist')
  .sass('src/sass/main.sass', 'dist')
  .browserSync({
    proxy: "localhost/shs-academy",
    files: ["./**/*.php", "./dist/*.js", "./dist/*.css"]
  });

if (!mix.inProduction()) {
  mix
    .webpackConfig({
      devtool: "source-map"
    })
    .sourceMaps();
}

if (mix.inProduction()) {
  mix.version();
}