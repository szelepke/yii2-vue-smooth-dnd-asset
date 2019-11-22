  
<?php
/**
 * @copyright Copyright (c) 2019
 * @author Szelepcsényi Zsolt <szelepcsenyi.zsolt@e-vista.hu>
 * @package yii2-vue-smooth-dnd-asset
 */
namespace szelepke\vuesmoothdnd;

use yii\web\AssetBundle;
use yii\web\View;
/**
 * Class VueSmoothDndAsset
 * @package szelepke\yii2-vue-smooth-dnd-asset
 */
class VueSmoothDndAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue-smooth-dnd/src';
    
    public $js = [
    	'main.js'
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}