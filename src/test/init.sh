#!/bin/sh

cd /var/www/html/test
composer install
cp .env.example .env
php artisan key:generate
php artisan config:clear

return 0