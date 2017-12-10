<?php

/*
 * This file is part of the 2amigos/yii2-multiselect-widget project.
 * (c) 2amigOS! <http://2amigos.us/>
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace dosamigos\multiselect;

use yii\web\AssetBundle;

class MultiSelectListBoxAsset extends AssetBundle
{
    public $sourcePath = '@npm/multiselect';

    public $js = [
        'js/jquery.multi-select.js'
    ];

    public $css = [
        'css/multi-select.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
