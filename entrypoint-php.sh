chown -R :www-data /var/www/database
chown -R :www-data /var/www/storage

composer install
php artisan down
php artisan migrate --force
php artisan cache:clear
php artisan auth:clear-resets
php artisan route:clear
php artisan route:cache
php artisan config:clear
php artisan config:cache
php artisan up
php-fpm