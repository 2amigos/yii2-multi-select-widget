<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\multiselect;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;
use yii\base\InvalidConfigException;
use Yii;

/**
 * MultiSelect renders a [David Stutz Multiselect widget](http://davidstutz.github.io/bootstrap-multiselect/)
 *
 * @see http://davidstutz.github.io/bootstrap-multiselect/
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\widgets
 */
class MultiSelect extends InputWidget
{
	/**
	 * @var array data for generating the list options (value=>display)
	 */
	public $data = [];
	/**
	 * @var array the options for the Bootstrap Multiselect JS plugin.
	 * Please refer to the Bootstrap Multiselect plugin Web page for possible options.
	 * @see http://davidstutz.github.io/bootstrap-multiselect/#options
	 */
	public $clientOptions = [];

	/**
	 * Initializes the widget.
	 */
	public function init()
	{
		if (empty($this->data)) {
			throw new  InvalidConfigException('"Multiselect::$data" attribute cannot be blank or an empty array.');
		}
		parent::init();
	}

	/**
	 * @inheritdoc
	 */
	public function run()
	{
		if ($this->hasModel()) {
			echo Html::activeDropDownList($this->model, $this->attribute, $this->data, $this->options);
		} else {
			echo Html::dropDownList($this->name, $this->value, $this->data, $this->options);
		}
		$this->registerPlugin();
	}

	/**
	 * Registers MultiSelect Bootstrap plugin and the related events
	 */
	protected function registerPlugin()
	{
		$view = $this->getView();

		MultiSelectAsset::register($view);

		$id = $this->options['id'];

		$options = $this->clientOptions !== false && !empty($this->clientOptions)
			? Json::encode($this->clientOptions)
			: '';

		$js = "jQuery('#$id').multiselect($options);";
		$view->registerJs($js);
	}
}
