FROM justintime50/nginx-php:8.0-8

COPY --chown=www-data:www-data ./src /var/www/html/public
