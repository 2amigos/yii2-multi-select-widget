<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\multiselect;

use yii\helpers\Json;

/**
 * MultiSelectListBox renders a [Louis Cuny Multiselect listbox widget](http://loudev.com/)
 *
 * @see http://loudev.com/
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\multiselect
 */
class MultiSelectListBox extends MultiSelect
{
    /**
     * Registers MultiSelect JQuery plugin and the related events
     */
    protected function registerPlugin()
    {
        $view = $this->getView();

        MultiSelectListBoxAsset::register($view);

        $id = $this->options['id'];

        $options = $this->clientOptions !== false && !empty($this->clientOptions)
            ? Json::encode($this->clientOptions)
            : '';

        $js = "jQuery('#$id').multiSelect($options);";
        $view->registerJs($js);
    }
} 