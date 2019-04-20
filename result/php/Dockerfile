FROM php:7.3.4-fpm-alpine3.9

RUN apk add --no-cache --virtual .build-deps \
    g++ make autoconf yaml-dev

RUN pecl channel-update pecl.php.net
RUN pecl install redis-4.3.0 && docker-php-ext-enable redis

RUN apk del --purge .build-deps