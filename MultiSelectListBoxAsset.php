<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\multiselect;

use yii\web\AssetBundle;

class MultiSelectListBoxAsset extends AssetBundle
{
	public $sourcePath = '@vendor/2amigos/yii2-multi-select-widget/assets';

	public $js = [
		'js/jquery-multiselect.js'
	];

	public $css = [
		'css/jquery-multiselect.css'
	];

	public $depends = [
        'yii\web\JqueryAsset',
	];
}