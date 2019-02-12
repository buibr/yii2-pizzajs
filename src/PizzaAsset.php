<?php
/**
 * @copyright Copyright (c) 2015 Roman Ovchinnikov
 * @link https://github.com/RomeroMsk
 * @version 1.1.0
 */
namespace buibr\pizzajs;

use yii\web\AssetBundle;

/**
 * DatePicker asset
 *
 * @author Roman Ovchinnikov <nex.software@gmail.com>
 * @link https://github.com/RomeroMsk/yii2-datepicker
 */
class PizzaAsset extends AssetBundle
{
    public $sourcePath = '@buibr/pizzajs/assets';

    public $depends = [
        'yii\bootstrap4\BootstrapPluginAsset',
    ];

    public $js = [
        'pizza/dist/js/pizza.min.js',
    ];

    public $css = [
        'pizza/dist/css/pizza.css',
    ];
}
