MultiSelect Widget for Yii2
==============================

Renders a [MultiSelect Bootstrap plugin](http://davidstutz.github.io/bootstrap-multiselect) widget.

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require 2amigos/yii2-multi-select-widget "*"
```
or add

```json
"2amigos/yii2-multi-select-widget" : "*"
```

to the require section of your application's `composer.json` file.

Usage
-----
Using a model:

```
use dosamigos\multiselect\MultiSelect;

<?=MultiSelect::widget([
    'data' => ['super', 'natural'],
    'name' => 'Test'
]);?>
```

> [![2amigOS!](http://www.gravatar.com/avatar/55363394d72945ff7ed312556ec041e0.png)](http://www.2amigos.us)   
<i>Web development has never been so fun!</i>
[www.2amigos.us](http://www.2amigos.us)
