<?php

namespace bubifengyun\echarts;

use yii\web\AssetBundle;

class EchartsAsset extends AssetBundle
{
    public $sourcePath = '@bower/echarts/dist';
    public $js = [
        'echarts.min.js',
        'extension/dataTool.min.js',
    ];
}
