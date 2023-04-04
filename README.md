# Winx 

CREATE SCHEMA `winx` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

git clone https://github.com/FelipeRfariasDev/winx.git

cd winx

composer install

cp .env.example .env

php artisan migrate 

php artisan key:generate

php artisan db:seed

php artisan serve
