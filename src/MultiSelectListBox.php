<?php

/*
 * This file is part of the 2amigos/yii2-multiselect-widget project.
 * (c) 2amigOS! <http://2amigos.us/>
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace dosamigos\multiselect;

use yii\base\InvalidParamException;
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
     * @throws InvalidParamException
     */
    public $options=['multiple'=>'multiple'];
    
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
