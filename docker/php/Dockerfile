FROM php:7.2-fpm-alpine

RUN apk update && apk add --no-cache oniguruma-dev icu-dev \
    && docker-php-ext-install mbstring intl opcache pdo_mysql

WORKDIR /usr/share/nginx/html

CMD ["php-fpm"]
