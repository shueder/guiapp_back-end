## Instalacion de laravel
composer create-project --prefer-dist laravel/laravel nombreproyecto

## si el proyecto no tiene el vendor ejecutar siguiente codigo
composer install

## crear model
php artisan make:model nombremodel

## Crear controladores
php artisan make:controller nombreController

## crear migration
php artisan make:migration nombremigration

## ejecutar migrations
php artisan migrate

## crear seeder
php artisan make:seeder nombreseeder

## regenerar el autocargado del composer
composer dump-autoload

## ejecutar seeder
php artisan db:seed

## refrescar seeder y migrations
php artisan migrate:fresh --seed

