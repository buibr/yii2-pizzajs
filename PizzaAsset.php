<?php
/**
 * @copyright Copyright (c) 2015 Roman Ovchinnikov
 * @link https://github.com/RomeroMsk
 * @version 1.1.0
 */
namespace buibr\pizzajs;

use yii\web\AssetBundle;

class PizzaAsset extends AssetBundle
{
    public $sourcePath = '@buibr/pizzajs/assets';

    public $js = [
        'js/pizza.min.js',
    ];

    public $css = [
        'css/pizza.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
