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
    public $sourcePath = '@npm/vue-smooth-dnd/dist';
    
    public $js = [
    	YII_ENV_DEV ? 'vue-smooth-dnd.js' : 'vue-smooth-dnd.min.js'
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}