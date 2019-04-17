# openfoodfacts-php
![Open Food Facts](https://static.openfoodfacts.org/images/misc/openfoodfacts-logo-en-178x150.png)

PHP API Wrapper for [Open Food Facts](https://openfoodfacts.org/), the open database about food.

[![Project Status](http://opensource.box.com/badges/active.svg)](http://opensource.box.com/badges)
[![Build Status](https://travis-ci.org/openfoodfacts/openfoodfacts-php.svg?branch=master)](https://travis-ci.org/openfoodfacts/openfoodfacts-php) [![Stories in Ready](https://badge.waffle.io/openfoodfacts/openfoodfacts-php.svg?label=ready&title=Ready)](https://waffle.io/openfoodfacts/openfoodfacts-php)
[![Average time to resolve an issue](https://isitmaintained.com/badge/resolution/openfoodfacts/openfoodfacts-php.svg)](https://isitmaintained.com/project/openfoodfacts/openfoodfacts-php "Average time to resolve an issue")
[![Percentage of issues still open](https://isitmaintained.com/badge/open/openfoodfacts/openfoodfacts-php.svg)](https://isitmaintained.com/project/openfoodfacts/openfoodfacts-php "Percentage of issues still open")


## Requirements

  * Php ^7.2    http://php.net/manual/fr/install.php;
  * Composer    https://getcomposer.org/download/;
  
## Installation

With Git:
```bash
git clone https://github.com/KYavuz/Api-Open-Food-Facts-Exemple nomDepot
With Composer:
```
With Composer:
```bash
composer install
composer require openfoodfacts/php-client
```

## Lancement projet
```php
php -S localhost:8000 -t public
```
## Usage
Is possible using API without Wrapper.
```php
$api = new OpenFoodFacts\Api('food','fr-en',$log);
$prd = $api->getProduct('3057640385148');
```


