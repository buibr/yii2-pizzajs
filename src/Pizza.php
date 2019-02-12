<?php

namespace buibr\pizzajs;

/**
 * This is just an example.
 */
class Pizza extends \yii\base\Widget
{

    public function init()
    {
        parent::init();
        $this->type = $this->type ? $this->type : 'checkbox';
        if ($this->style == 'polaris') {
            $this->color = 'polaris';
        }
        if ($this->style == 'futurico') {
            $this->color = 'futurico';
        }
        $this->color = ($this->color != 'black') ? $this->color : 'minimal';
        $this->options += [
            'class' => 'i-checks-'.$this->id
        ];
        $this->idItem = $this->options['id'];
    }

    public function run()
    {
        $this->registerScript();

        switch ($this->type) {
            case 'checkbox':
                echo Html::activeCheckbox($this->model, $this->attribute, $this->options);
                break;
            case 'checkbox-list':
                echo Html::activeCheckboxList($this->model, $this->attribute, $this->items, $this->options);
                break;
            case 'radio':
                echo Html::activeRadio($this->model, $this->attribute, $this->options);
                break;
            case 'radio-list':
                echo Html::activeRadioList($this->model, $this->attribute, $this->items, $this->options);
                break;
        }
    }
}
