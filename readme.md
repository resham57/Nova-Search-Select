## Selectable Search for Laravel Nova 4
<p align="center"><a href="https://github.com/resham57/Nova-Search-Select" target="_blank"><img src="https://raw.githubusercontent.com/resham57/Nova-Search-Select/main/guide.gif" alt="Info"></a></p>
<p align="center">
<a href="https://packagist.org/packages/resham/nova-search-select"><img src="https://img.shields.io/packagist/v/resham/nova-search-select.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/resham/nova-search-select"><img src="https://img.shields.io/packagist/l/resham/nova-search-select.svg" alt="License"></a>
</p>

### Requirement
This is a package to integrate a selectable search with Laravel Nova version 4.
- [PHP >= 7.3](http://php.net/)
- [Laravel Framework](https://github.com/laravel/framework)
- [Laravel Nova v4](https://nova.laravel.com/)

### Installation
Require this package with composer.
```shell
composer require resham/nova-search-select
```

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

### Security
If you discover any issues, please email at [reshampokhrel57@gmail.com](mailto:reshampokhrel57@gmail.com).