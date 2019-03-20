<h1 align="center">腾讯AI开放平台 SDK</h1>

<p align="center">Tencent AI open platform sdk</p>

<p align="center">
<a href="https://styleci.io/repos/138533744"><img src="https://styleci.io/repos/138533744/shield?branch=master" alt="styleci"></a>
<a href="https://packagist.org/packages/justmd5/laravel-tencent-ai"><img src="https://img.shields.io/packagist/php-v/justmd5/laravel-tencent-ai.svg" alt="PHP from Packagist"></a>
<a href="https://packagist.org/packages/justmd5/laravel-tencent-ai"><img src="https://poser.pugx.org/justmd5/laravel-tencent-ai/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/justmd5/laravel-tencent-ai"><img src="https://poser.pugx.org/justmd5/laravel-tencent-ai/v/unstable.svg" alt="Latest Unstable Version"></a>
<a href="https://packagist.org/packages/justmd5/laravel-tencent-ai"><img src="https://img.shields.io/github/stars/justmd5/laravel-tencent-ai.svg?style=social&label=Stars" alt="GitHub stars"></a>
<a href="https://packagist.org/packages/justmd5/laravel-tencent-ai"><img src="https://img.shields.io/github/license/justmd5/laravel-tencent-ai.svg" alt="License"></a>
</p>

## Requirement
1. PHP >= 7.0
2. **[Composer](https://getcomposer.org/)**
3. ext-curl 拓展
4. ext-json 拓展

## Install
in your laravel application, execute the following command:

`composer require justmd5/laravel-tencent-ai`
## Configure
add service provider to the app.php:

```
'providers' => [
    // Application Service Providers...
    Justmd5\LaravelTencentAi\ServiceProvider::class,
],
```
> if you use laravel that >= 5.5 ,the above steps are not required.

publish config:
```shell
php artisan vendor:publish --provider="Justmd5\LaravelTencentAi\ServiceProvider"
```

after that, you might want to change some config about tencentai:
```php
// config/tencentai.php
return [
    'appKey'    => '',
    'appSecret' => '',
    'debug'     => 0,
];
```

## Usage

```php
    $params = [
            'question'=>'腾讯人工智能',
            'session'=>123,
    ];
    
    dd(app('tencent-ai')->nlp->request('textchat', $params));

```

## Documentation
[Tencent AI](https://ai.qq.com)  · [Official Documents](https://ai.qq.com/doc/index.shtml)
### Help
qq群

<p align="center">
<img width="200" src="https://ws1.sinaimg.cn/mw690/bc1dfc6agy1fsmg3zak6cj20f00kk7ei.jpg">
</p>


### Thanks

- thanks to [hanson/foundation-sdk](https://github.com/Hanson/foundation-sdk)

## License

MIT

