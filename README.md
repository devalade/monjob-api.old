<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## MONJB

This is the api behind MonJob application.  

## Installer les packages
``` bash
composer install && pnpm install
```

## Générer la clé d'API

``` bash
cp .env.example .env && php artisan key:generate
```

## Configurer la base de donnée
Si vous avez de problème à lancer une votre base de donnée MySQL ou PostgreSQL. 
Vous pouvez utiliser Sqlite

``` bash
touch database/db.sqlite
```
Cette commande va vous créer une base de donnée Sqlite que vous allez utiliser dans votre projet.
Modifier les informations de configuration de la base de donnée au niveau dans le fichier `.env`

```
DB_CONNECTION=sqlite
DB_DATABASE=database/db.sqlite
DB_FOREIGN_KEYS=true
```

## Migration

``` bash
php artisan migrate --seed
```

## You can start the project
``` bash
php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
