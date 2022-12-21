<?php

namespace app\modules\portal;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();

        $this->params['foo'] = 'bar';
// ...  other initialization code ...
    }
}