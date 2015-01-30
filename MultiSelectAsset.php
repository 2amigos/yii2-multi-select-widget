<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\multiselect;

use yii\web\AssetBundle;

class MultiSelectAsset extends AssetBundle
{
	public $sourcePath = '@bower/bootstrap-multiselect/dist';

	public $js = [
		'js/bootstrap-multiselect.js'
	];

	public $css = [
		'css/bootstrap-multiselect.css'
	];

	public $depends = [
		'yii\bootstrap\BootstrapPluginAsset'
	];
}