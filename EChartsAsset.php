<?php

namespace bubifengyun\echarts;

use yii\web\AssetBundle;

class EchartsAsset extends AssetBundle
{
    public $sourcePath = '@bower/echarts';
    public $js = [
        './dist/echarts.min.js',
        './dist/extension/dataTool.min.js',
        './map/js/china.js',
        './map/js/china-contour.js',
        './map/js/world.js',
        './map/js/province/*.js',
    ];
}
