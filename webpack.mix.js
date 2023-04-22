let mix = require('laravel-mix')
let path = require('path')

require('./nova.mix')

mix
  .setPublicPath('dist')
  .js('resources/js/nova-search-select.js', 'js')
  .vue({ version: 3 })
  .sass('resources/scss/nova-search-select.scss', 'css')
  .nova('resham/nova-search-select')
  .alias({ '@': path.join(__dirname, '../vendor/laravel/nova/resources/js/') })
