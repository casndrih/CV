#!/bin/sh
set -eu
cd /var/www/html
mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs bootstrap/cache
if [ "${DB_CONNECTION:-sqlite}" = "sqlite" ]; then
    DB_FILE="${DB_DATABASE:-/tmp/cv.sqlite}"
    mkdir -p "$(dirname "$DB_FILE")"
    touch "$DB_FILE"
fi
chown -R www-data:www-data storage bootstrap/cache
php artisan package:discover --ansi
php artisan migrate --force --no-interaction
php artisan config:cache
exec apache2-foreground
