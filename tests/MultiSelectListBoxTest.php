<?php

namespace tests;

/*
* This file is part of the 2amigos/yii2-multiselect-widget project.
*
* (c) 2amigOS! <http://2amigos.us/>
*
* For the full copyright and license information, please view
* the LICENSE file that was distributed with this source code.
*/
use dosamigos\multiselect\MultiSelectListBox;
use tests\data\models\Post;

class MultiSelectListBoxTest extends TestCase
{
    public function testRenderWithModel()
    {
        $model = new Post();
        $out = MultiSelectListBox::widget([
            'model' => $model,
            'attribute' => 'tags',
            'data' => [ 'super' => 'super', 'natural' => 'natural']
        ]);

        $expected = '<select id="post-tags" name="Post[tags]"><option value="super">super</option><option value="natural">natural</option></select>';

        $this->assertEqualsWithoutLE($expected, str_replace("\n", '', $out));
    }

    public function testRenderWithNameAndValue()
    {
        $out = MultiSelectListBox::widget([
            'id' => 'test',
            'name' => 'test',
            'value' => 'super',
            'data' => [ 'super' => 'super', 'natural' => 'natural']
        ]);

        $expected = '<select id="test" name="test"><option value="super" selected>super</option><option value="natural">natural</option></select>';

        $this->assertEqualsWithoutLE($expected, str_replace("\n", '', $out));
    }
}
