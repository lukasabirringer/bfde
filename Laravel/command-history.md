php artisan make:auth
php artisan migrate
php artisan make:migration add_role_to_userstable
php artisan make:middleware isAdmin
php artisan make:controller Frontend/ProfileController
php artisan make:controller Admin/UserController
php artisan route:list
php artisan make:controller Frontend/BeachfeldController --resource
php artisan make:migration createBeacjcourtsTable
php artisan make:model Beachcourt