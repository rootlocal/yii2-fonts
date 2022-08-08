<?php

namespace rootlocal\fonts;

use yii\web\AssetBundle;

/**
 * Class FontsSourceSansProAsset
 *
 * @author Alexander Zakharov <sys@eml.ru>
 * @package rootlocal\fonts
 */
class FontsSourceSansProAsset extends AssetBundle
{
    /** @var string */
    public $sourcePath = '@bower/source-sans-pro';
    /** @var string[] */
    public $css = [YII_DEBUG ? 'css/source-sans-pro.css' : 'css/source-sans-pro.min.css'];
}