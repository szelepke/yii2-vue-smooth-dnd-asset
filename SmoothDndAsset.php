<?php
/**
 * @copyright Copyright (c) 2019
 * @author Szelepcsényi Zsolt <szelepcsenyi.zsolt@e-vista.hu>
 * @package yii2-smooth-dnd-asset
 */
namespace szelepke\vuesmoothdnd;

use yii\web\AssetBundle;
use yii\web\View;
/**
 * Class SmoothDndAsset
 * @package szelepke\yii2-vue-smooth-dnd-asset
 */
class SmoothDndAsset extends AssetBundle
{
    public $sourcePath = '@npm/smooth-dnd/dist';
    
    public $js = [
    	'index.js'
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}