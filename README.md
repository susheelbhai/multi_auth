## Multi Authentication System for Laravel

## Installation

### Laravel
Require this package in your composer.json and update composer. This will download the package and the dompdf + fontlib libraries also.

    composer require susheelbhai/multi_auth

## Configuration

### Service Provider

Register the service Provider in  `config/app.php`

  ```
  MultiAuth\MultiAuthServiceProvider::class,
  ```
  
### Vendor Publish

Publish all the required files using the following command 

  ```
      php artisan vendor:publish --tag="multi_auth"
  ```  

### Register Middleware

Register middlewares in `app/Http/Kernel.php`

  ```
        'auth_user' => \App\Http\Middleware\AuthUser::class,
        'auth_partner' => \App\Http\Middleware\AuthPartner::class,
        'auth_admin' => \App\Http\Middleware\AuthAdmin::class,
        'guest_user' => \App\Http\Middleware\GuestUser::class,
        'guest_partner' => \App\Http\Middleware\GuestPartner::class,
        'guest_admin' => \App\Http\Middleware\GuestAdmin::class,
  ```
  
    
### License

This Multi Auth Package is developed by susheelbhai for personal use software licensed under the [MIT license](http://opensource.org/licenses/MIT)
