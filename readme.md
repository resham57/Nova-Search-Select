<p align="center"><a href="https://github.com/resham57/Nova-Search-Select" target="_blank"><img src="https://raw.githubusercontent.com/resham57/Nova-Search-Select/show.png" width="400" alt="Info"></a></p>

### First Time Installation
First run this command before the nova build
```shell
php artisan vendor:publish --tag=nova-search-select --force
```

After this, run the build command for development or production according to your need, then publish the resources
```shell
cd ./vendor/laravel/nova
mv webpack.mix.js.dist webpack.mix.js
npm ci
npm run dev
rm -rf node_modules
cd -
php artisan nova:publish
```