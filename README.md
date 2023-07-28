# Backpack-articles

[![Build Status](https://travis-ci.org/parabellumKoval/backpack-pages.svg?branch=master)](https://travis-ci.org/parabellumKoval/backpack-pages)
[![Coverage Status](https://coveralls.io/repos/github/parabellumKoval/backpack-pages/badge.svg?branch=master)](https://coveralls.io/github/parabellumKoval/backpack-pages?branch=master)

[![Packagist](https://img.shields.io/packagist/v/parabellumKoval/backpack-pages.svg)](https://packagist.org/packages/parabellumKoval/backpack-pages)
[![Packagist](https://poser.pugx.org/parabellumKoval/backpack-pages/d/total.svg)](https://packagist.org/packages/parabellumKoval/backpack-pages)
[![Packagist](https://img.shields.io/packagist/l/parabellumKoval/backpack-pages.svg)](https://packagist.org/packages/parabellumKoval/backpack-pages)

This package provides a quick starter kit for implementing pages for Laravel Backpack. Provides a database, CRUD interface, API routes and more.

## Installation

Install via composer
```bash
composer require parabellumKoval/backpack-pages
```

Migrate
```bash
php artisan migrate
```

### Publish

#### Configuration File
```bash
php artisan vendor:publish --provider="Backpack\Pages\ServiceProvider" --tag="config"
```

#### Views File
```bash
php artisan vendor:publish --provider="Backpack\Pages\ServiceProvider" --tag="views"
```

#### Migrations File
```bash
php artisan vendor:publish --provider="Backpack\Pages\ServiceProvider" --tag="migrations"
```

#### Routes File
```bash
php artisan vendor:publish --provider="Backpack\Pages\ServiceProvider" --tag="routes"
```

## Usage

### Seeders
```bash
php artisan db:seed --class="Backpack\Pages\database\seeders\PagesSeeder"
```

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [](https://github.com/parabellumKoval/backpack-pages)
- [All contributors](https://github.com/parabellumKoval/backpack-pages/graphs/contributors)
