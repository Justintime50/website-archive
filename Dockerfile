FROM justintime50/nginx-php:8.2-16

COPY --chown=www-data:www-data ./src /var/www/html/public
