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
      php artisan vendor:publish --tag="multi_auth" --force 
  ```  

### Migrate database

Migrate  databse tables and seed with the following commands

  ```
        php artisan migrate
        php artisan db:seed
  ```

### License

This Multi Auth Package is developed by susheelbhai for personal use software licensed under the [MIT license](http://opensource.org/licenses/MIT)
