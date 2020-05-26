FROM php:fpm-buster
RUN apt update
RUN apt install zlib1g-dev
RUN docker-php-ext-install pdo_mysql
RUN apt install libpng-dev -y
RUN docker-php-ext-install gd
RUN apt install libcurl4-openssl-dev -y
RUN docker-php-ext-install curl

RUN pecl install redis
RUN docker-php-ext-enable redis

RUN apt-get install -y libcurl4-openssl-dev pkg-config libssl-dev
RUN pecl install mongodb
RUN docker-php-ext-enable mongodb

CMD ["php-fpm"]
EXPOSE 9000
