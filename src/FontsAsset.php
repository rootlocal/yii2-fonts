<?php

namespace rootlocal\fonts;

use yii\web\AssetBundle;

/**
 * Class FontsAsset
 *
 * @author Alexander Zakharov <sys@eml.ru>
 * @package rootlocal\fonts
 */
class FontsAsset extends AssetBundle
{
    public $depends = [
        FontsOpenSansAsset::class,
        FontsSourceSansProAsset::class,
    ];
}