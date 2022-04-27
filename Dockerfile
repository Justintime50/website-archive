FROM justintime50/nginx-php:8.1-11

COPY --chown=www-data:www-data ./src /var/www/html/public
