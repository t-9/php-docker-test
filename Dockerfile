FROM php:7.4.2-apache
RUN apt update
RUN apt install -y\
  git\
  libzip-dev\
  unzip\
  zip
RUN docker-php-ext-install zip
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer global require laravel/installer