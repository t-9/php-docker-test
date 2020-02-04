FROM php:7.4.2-apache
COPY ./php.ini /usr/local/etc/php/
COPY ./*.conf /etc/apache2/sites-available/
RUN apt update && \
    apt install -y \
      git \
      libzip-dev \
      unzip \
      zip
RUN docker-php-ext-install zip
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer global require "laravel/installer"