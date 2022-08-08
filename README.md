yii2-fonts
=============
[![Latest Stable Version](https://img.shields.io/packagist/v/rootlocal/yii2-fonts.svg)](https://packagist.org/packages/rootlocal/yii2-fonts)
[homepage](https://github.com/rootlocal/yii2-fonts)

## How to install?

~~~shell
composer require rootlocal/yii2-fonts
~~~

or

```json
{
  "require": {
    "rootlocal/yii2-fonts": "~1.0"
  }
}
```

You may also check the package information on [packagist](https://packagist.org/packages/rootlocal/yii2-fonts).

Usage
-----

```php
<?php 
use rootlocal\fonts\FontsAsset;

/**
* @var \yii\web\View $this
 */
 
 // register all Fonts
 FontsAsset::register($this);
 ?>
```
