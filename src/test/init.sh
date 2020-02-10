#!/bin/sh

cd /var/www/html/test
composer install
cp .env.example .env

sed -e 's/DB_HOST=127\.0\.0\.1/DB_HOST=db/g' .env > .env.tmp1
sed -e 's/DB_DATABASE=laravel/DB_DATABASE=docker/g' .env.tmp1 > .env
sed -e 's/DB_USERNAME=root/DB_USERNAME=user/g' .env > .env.tmp1
sed -e 's/DB_PASSWORD=/DB_PASSWORD=password/g' .env.tmp1 > .env
rm .env.tmp1

php artisan key:generate
php artisan config:clear

return 0