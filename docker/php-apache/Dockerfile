FROM php:7.4.2-apache
WORKDIR '/'
RUN apt update && \
    apt install -y \
      git \
      libzip-dev \
      unzip \
      zip
RUN docker-php-ext-install zip
COPY --from=composer /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin
RUN composer global require "laravel/installer" \
    && composer global require "laravel/envoy"
RUN docker-php-ext-install pdo_mysql
RUN apt update && \
    apt install -y \
      libonig-dev
RUN docker-php-ext-install bcmath mbstring