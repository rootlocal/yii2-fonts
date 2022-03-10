yii2-fonts
=============

[homepage](https://github.com/rootlocal/yii2-fonts)

How to install?
---------------

Get it via [composer](http://getcomposer.org/) by adding the package to your `composer.json`:

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
use rootlocal\fonts\FontsOpenSansAsset;

/**
* @var \yii\web\View $this
 */
 
 FontsOpenSansAsset::register($this);
 ?>
```
