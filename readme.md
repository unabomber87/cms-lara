
[![Build Status](https://travis-ci.org/unabomber87/cms-lara.svg?branch=master)](https://travis-ci.org/unabomber87/cms-lara)
[![StyleCI](https://styleci.io/repos/75200892/shield?branch=master)](https://styleci.io/repos/75200892)
[![Dependency Status](https://www.versioneye.com/user/projects/58417f301f3a6d01f2f6f4cd/badge.svg?style=flat-square)](https://www.versioneye.com/user/projects/58417f301f3a6d01f2f6f4cd)

## About Cms Lara

Cms lara is a cms based on laravel voyager

## Installation

clone repo : 

```
git clone https://github.com/unabomber87/cms-lara.git
```

install composer dependencies : 

```
composer install
```

create .env file with db credentials <br>

generate ciphers key

```
php artisan key:generate
```

install voyager : 

```
php artisan voyager:install
```

add directory permission

```
sudo chmod -R 777 bootstrap/cache/
sudo chmod -R 777 storage/logs/
sudo chmod -R 777 storage/framework/views/
sudo chmod -R 777 storage/framework/sessions/
sudo chmod -R 777 storage/framework/cache/
```

Reinit database

```
php artisan migrate:refresh --seed
php artisan db:seed --class=InitSeeder
```



visite BASE_URL/001/admin for backoffice <br>

you can login with the following login credentials:

```
**email:** admin@admin.com
**password:** password
```

## License

The cms lara is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
