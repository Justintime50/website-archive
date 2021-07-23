FROM justintime50/nginx-php:8.0-7

COPY --chown=www-data:www-data ./src /var/www/html/public
