FROM php:fpm-buster
RUN apt update
RUN apt install zlib1g-dev
RUN docker-php-ext-install pdo_mysql
RUN apt install libpng-dev -y
RUN docker-php-ext-install gd
RUN apt install libcurl4-openssl-dev -y
RUN docker-php-ext-install curl

CMD ["php-fpm"]
EXPOSE 9000
