FROM php:5.6-apache
COPY ./ /var/www/html

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/html
RUN composer.phar install