.env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=password
DB_COLLATION=utf8mb4_unicode_ci 

step sql migrate
-> data 
-> index

1. install sail -> composer require laravel/sail --dev
2. sail init -> php artisan sail:install
3. sail up -> ./vendor/bin/sail up

4. sail migrate -> ./vendor/bin/sail artisan migrate
5. storage link -> ./vendor/bin/sail artisan storage:link
