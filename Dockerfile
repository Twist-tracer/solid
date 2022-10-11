FROM composer:2.4.1 AS composer
FROM php:8.1.4-alpine as base

ENV \
    COMPOSER_ALLOW_SUPERUSER="1" \
    COMPOSER_HOME="/tmp/composer" \
    PS1='\[\033[1;32m\]\[\033[1;36m\][\u@\h] \[\033[1;34m\]\w\[\033[0;35m\] \[\033[1;36m\]# \[\033[0m\]'

# persistent / runtime deps
ENV PHPIZE_DEPS \
    build-base \
    autoconf \
    libstdc++ \
    libc-dev \
    pcre-dev \
    openssl \
    pkgconf \
    cmake \
    make \
    file \
    re2c \
    g++ \
    gcc \
    less

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN set -xe \
    && apk add --no-cache --virtual .build-deps ${PHPIZE_DEPS} \
    && apk add --no-cache --repository http://dl-3.alpinelinux.org/alpine/edge/community gnu-libiconv \
    && docker-php-ext-configure bcmath --enable-bcmath \
    && docker-php-ext-configure exif --enable-exif \
    && docker-php-ext-install -j$(nproc) \
        sockets \
        bcmath \
        pcntl \
        exif \
    && pecl install -D 'enable-sockets="yes" enable-openssl="no" enable-http2="no" enable-mysqlnd="no" enable-swoole-json="no" enable-swoole-curl="no" enable-cares="no" with-postgres="no"' openswoole \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable --ini-name zz-openswoole.ini openswoole \
    && rm -rf /app /home/user ${COMPOSER_HOME} \
    && mkdir /app /home/user ${COMPOSER_HOME} \
    && ln -s /usr/bin/composer /usr/bin/c

#COPY ./docker/php.ini /usr/local/etc/php/php.ini-production
#COPY ./docker/php-development.ini /usr/local/etc/php/php.ini-development
#COPY ./docker/php.ini /usr/local/etc/php/php.ini

WORKDIR /app

EXPOSE 80

CMD ["php", "artisan", "serve", "--host", "app", "--port", "80"]
