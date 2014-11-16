<?php
/**
 * Created by PhpStorm.
 * User: linzy
 * Date: 9/28/2014
 * Time: 6:40 PM
 */

namespace backend\assets;


use yii\web\AssetBundle;
use lzsoft\metronic\GlobalAsset;

class MetronicAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
    ];
    public $depends = [
        'lzsoft\metronic\FixIEAsset',
        'lzsoft\metronic\GlobalAsset',
        'lzsoft\metronic\DefaultThemeAsset',
    ];
} 