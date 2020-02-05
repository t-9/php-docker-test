FROM php:7.4.2-apache
WORKDIR '/'
ADD ./src /var/www/html
ADD ./php.ini /usr/local/etc/php/php.ini
ADD ./sites-available /etc/apache2/sites-available
RUN apt update && \
    apt install -y \
      git \
      libzip-dev \
      unzip \
      zip
RUN docker-php-ext-install zip
COPY --from=composer /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_NO_INTERACTION 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin
RUN composer global require "laravel/installer" && \
    composer global require "laravel/envoy"
WORKDIR /var/www/html/test
RUN composer install
RUN cp .env.example .env
RUN php artisan key:generate && \
    php artisan config:clear