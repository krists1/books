#!/bin/bash

# download external packages
composer install

# generate app key
php artisan key:generate

# run migration and populate DB
php artisan migrate --seed
