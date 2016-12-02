

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
</p>

## About Cms Lara

Cms lara is a cms base on laravel voyager

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
```

visite BASE_URL/001/admin for backoffice <br>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
