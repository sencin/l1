# D1 - Cloudflare bindings for Laravel 12

<!-- [![StyleCI](https://github.styleci.io/repos/845491307/shield?branch=main)](https://github.styleci.io/repos/845491307)
![Packagist Dependency Version](https://img.shields.io/packagist/dependency-v/zyna/cloudflare-d1-database/php)
[![Latest Stable Version](https://poser.pugx.org/zyna/cloudflare-d1-database/v/stable)](https://packagist.org/packages/zyna/cloudflare-d1-database)
[![Total Downloads](https://poser.pugx.org/zyna/cloudflare-d1-database/downloads)](https://packagist.org/packages/zyna/cloudflare-d1-database)
[![Monthly Downloads](https://poser.pugx.org/zyna/cloudflare-d1-database/d/monthly)](https://packagist.org/packages/zyna/cloudflare-d1-database)
[![License](https://poser.pugx.org/zyna/cloudflare-d1-database/license)](https://packagist.org/packages/zyna/cloudflare-d1-database) -->

 #### This is a forked package from [renoki-co](https://packagist.org/packages/renoki-co/l1) and [Ntanduy](https://packagist.org/packages/ntanduy/cloudflare-d1-database), I plan to maintain this to future laravel versions. 
 #### a star ⭐⭐⭐⭐ on github would be enough as a motivation and encouragement for me to continue maintaining this package. 
   
Integrate Cloudflare bindings into your PHP/Laravel application.

This package offers support for:

- [Cloudflare D1](https://developers.cloudflare.com/d1)

## 🚀 Installation

```bash
composer require zyna/l1
```

## 👏 Usage

### Integrate Cloudflare D1 with Laravel

Add a new connection in your `config/database.php` file:

```php
'connections' => [
    'd1' => [
        'driver' => 'd1',
        'prefix' => '',
        'database' => env('CLOUDFLARE_D1_DATABASE_ID', ''),
        'api' => 'https://api.cloudflare.com/client/v4',
        'auth' => [
            'token' => env('CLOUDFLARE_TOKEN', ''),
            'account_id' => env('CLOUDFLARE_ACCOUNT_ID', ''),
        ],
    ],
]
```

Next, configure your Cloudflare credentials in the `.env` file:

```
CLOUDFLARE_TOKEN=
CLOUDFLARE_ACCOUNT_ID=
CLOUDFLARE_D1_DATABASE_ID=xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx
```

The `d1` driver will forward PDO queries to the Cloudflare D1 API to execute them.

## 🌱 Testing

Start the built-in Worker to simulate the Cloudflare API:

```bash
cd tests/worker
npm ci
npm run start
```

In a separate terminal, run the tests:

``` bash
vendor/bin/phpunit
```

## 🤝 Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## 🔒  Security

If you discover any security related issues, please Make Issue Request on Github.

## 🎉 Credits
- [renoki-co](https://github.com/renoki-co)
- [TanDuy03](https://github.com/TanDuy03)
- [Senchin](https://github.com/sencin)
- [All Contributors](../../contributors)
