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
	public $sourcePath = '@bower/multiselect';

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