# DevFactory - Macros

## Installation in Laravel

You can pull in the package via composer (Laravel 6+):
``` bash
composer require devfactory/macros
```

You can pull in the package via composer (Laravel 5):
``` bash
composer require devfactory/macros:^1.0
```

Then register the service provider and Facade by opening `app/config/app.php`

```php
Devfactory\Macros\MacrosServiceProvider::class,
```

You must publish the config file:

```bash
php artisan vendor:publish --provider="Devfactory\Macros\MacrosServiceProvider"
```
