FROM php:7.4.3-apache
WORKDIR '/'
COPY init.sh /root/
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
RUN a2enmod rewrite
RUN docker-php-ext-install pdo_mysql
RUN apt update && \
    apt install -y \
      libonig-dev
RUN docker-php-ext-install bcmath mbstring
RUN pecl install redis
RUN apt update && \
    apt install -y less
RUN apt update && \
    apt install -y libicu-dev
RUN docker-php-ext-install intl
RUN curl -sL https://deb.nodesource.com/setup_13.x | bash -
RUN apt install -y nodejs
RUN docker-php-ext-install opcache
RUN pecl install apcu
RUN apt install -y wget
RUN wget -O phive.phar https://phar.io/releases/phive.phar && \
    wget -O phive.phar.asc https://phar.io/releases/phive.phar.asc && \
    gpg --keyserver pool.sks-keyservers.net --recv-keys 0x9D8A98B29B2D5D79 && \
    gpg --verify phive.phar.asc phive.phar && \
    chmod +x phive.phar && \
    mv phive.phar /usr/local/bin/phive