<?php

namespace rootlocal\fonts;

use yii\web\AssetBundle;

/**
 * Class FontsSansProAsset
 *
 * @author Alexander Zakharov <sys@eml.ru>
 * @created 08.08.2022 21:16
 * @package rootlocal\fonts
 */
class FontsSansProAsset extends AssetBundle
{
    /** @var string */
    public $sourcePath = '@bower/source-sans-pro';
    /** @var string[] */
    public $css = [YII_DEBUG ? 'css/source-sans-pro.css' : 'css/source-sans-pro.min.css'];
}