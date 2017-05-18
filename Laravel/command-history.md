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
php artisan make:controller Frontend/PagesController --resource
php artisan make:controller Admin/PagesController --resource
php artisan make:migration createPagesTable
php artisan make:model Page

{{ url('profile/'.Auth::user()->id) }}
{{ url('admin/beachcourts/'.$beachcourt->id) }}
{{ url('admin/beachcourts') }}
<form class="form-horizontal" action="{{ url('admin/users/') }}" method="POST">



ToDo
------
- Rating-Modul
- Pages-Modul
- Suchfunktion
- User Feinschliff
- Beachcourt Feinschliff
- Startseite Feinschliff
- Email Funktion
- Backend Dashboard
- Testing

- Navigations-Modul