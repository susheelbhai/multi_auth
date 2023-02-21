## Multi Authentication System for Laravel

## Installation

### Laravel
Require this package in your composer.json and update composer. This will download the package and the dompdf + fontlib libraries also.

    composer require susheelbhai/multi_auth

## Configuration

### Service Provider

Register the service Provider in  `config/app.php`

  ```
  Susheelbhai\MultiAuth\MultiAuthServiceProvider::class,
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
### update auth configuration

#### Guard
  ```
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'user' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'partner' => [
            'driver' => 'session',
            'provider' => 'partners',
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
    ],
  ```      
#### Provider
  ```
  'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        'partners' => [
            'driver' => 'eloquent',
            'model' => App\Models\Partner::class,
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
    ],
  ```

#### Password
  ```
  'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'partners' => [
            'provider' => 'partners',
            'table' => 'password_resets',
            'expire' => 600,
            'throttle' => 600,
        ],
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        
    ],
  ```       

### License

This Multi Auth Package is developed by susheelbhai for personal use software licensed under the [MIT license](http://opensource.org/licenses/MIT)
