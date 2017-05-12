php artisan make:auth
php artisan migrate
php artisan make:migration add_role_to_userstable
php artisan make:middleware isAdmin
php artisan make:controller Frontend/ProfileController