<?php

/*
 * This file is part of the 2amigos/yii2-select2-widget project.
 * (c) 2amigOS! <http://2amigos.us/>
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace dosamigos\select2;

use yii\web\AssetBundle;
use yii\bootstrap4\BootstrapPluginAsset;

/**
 * Class Select2Bootstrap4Asset
 * @package dosamigos\select2
 */
class Select2Bootstrap4Asset extends AssetBundle
{
    public $sourcePath = '@npm/ttskch--select2-bootstrap4-theme/dist';

    public $css = [
        'select2-bootstrap4.css'
    ];

    public $depends = [
        Select2Asset::class,
        BootstrapPluginAsset::class,
    ];
}