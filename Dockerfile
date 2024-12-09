FROM justintime50/nginx-php:8.4-23

COPY --chown=www-data:www-data ./src /var/www/html/public
