#!/bin/sh

cd /var/www/html/test
composer install
cp .env.example .env

sed -e 's/DB_HOST=127\.0\.0\.1/DB_HOST=db/g' .env > .env.tmp1
sed -e 's/DB_DATABASE=laravel/DB_DATABASE=docker/g' .env.tmp1 > .env
sed -e 's/DB_USERNAME=root/DB_USERNAME=user/g' .env > .env.tmp1
sed -e 's/DB_PASSWORD=/DB_PASSWORD=password/g' .env.tmp1 > .env
rm .env.tmp1

sed -e 's/REDIS_HOST=127\.0\.0\.1/REDIS_HOST=redis/g' .env > .env.tmp1
sed -e 's/CACHE_DRIVER=file/CACHE_DRIVER=redis/g' .env.tmp1 > .env
sed -e 's/SESSION_DRIVER=file/SESSION_DRIVER=redis/g' .env > .env.tmp1

sed -e 's/MAIL_HOST=smtp\.mailtrap\.io/MAIL_HOST=maildev/g' .env.tmp1 > .env
sed -e 's/MAIL_PORT=2525/MAIL_PORT=25/g' .env > .env.tmp1
sed -e 's/MAIL_FROM_ADDRESS=null/MAIL_FROM_ADDRESS=test@example\.com/g' .env.tmp1 > .env

rm .env.tmp1

php artisan key:generate
php artisan config:clear

php artisan migrate

npm install
npm run dev

yes | phive install

echo ServerName $HOSTNAME > /etc/apache2/conf-available/fqdn.conf
a2enconf fqdn
service apache2 restart

return 0