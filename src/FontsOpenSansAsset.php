<?php

namespace rootlocal\fonts;

use yii\web\AssetBundle;

/**
 * Class FontsOpenSansAsset
 *
 * @package rootlocal\fonts
 * @author Alexander Zakharov <sys@eml.ru>
 */
class FontsOpenSansAsset extends AssetBundle
{
    /** @var string */
    public $sourcePath = '@bower/open-sans-fontface';
    /** @var string[] */
    public $css = ['open-sans.css'];
}