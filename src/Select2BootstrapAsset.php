<?php

namespace dosamigos\select2;

use yii\web\AssetBundle;
use yii\bootstrap5\BootstrapPluginAsset;

/**
 * Class Select2Bootstrap4Asset
 * @package dosamigos\select2
 */
class Select2BootstrapAsset extends AssetBundle
{
    public $sourcePath = '@npm/select2-bootstrap-5-theme/dist';

    public $css = [
        'select2-bootstrap-5-theme.css'
    ];

    public $depends = [
        Select2Asset::class,
        BootstrapPluginAsset::class,
    ];
}