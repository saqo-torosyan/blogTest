<!-- change .env.example folder to .env  then there set your database configuration info

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD= -->

<!--create vendor folder for -->
composer install

<!--create node_modules folder for -->
npm install

<!-- To run all of your outstanding migrations, execute the migrate Artisan command: -->
php artisan migrate

<!-- Run laravel project -->
php artisan serve

<!-- This command will run in the foreground and invoke the scheduler  until you exit the command: -->
php artisan schedule:work


