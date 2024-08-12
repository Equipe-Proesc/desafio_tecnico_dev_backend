#!/usr/bin

docker run --rm -v $(pwd):/var/www/html -w /var/www/html composer:latest composer install && ./vendor/bin/sail up -d