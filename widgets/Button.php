<?php

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class Button extends Widget
{
    public $style;
    public $content;

    public function init()
    {
        parent::init();

        if ($this->style === null) {
            $this->style = "normal";
        }

        if ($this->content === null) {
            $this->content = "";
        }
    }

    public function run()
    {
        return Html::button(Html::encode($this->content), [
            "class" => "btn btn-$this->style",
        ]);
    }
}
