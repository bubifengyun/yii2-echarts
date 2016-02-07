<?php

namespace bubifengyun\echarts;

use yii\web\AssetBundle;

class EchartsAsset extends AssetBundle
{
    public $sourcePath = '@bower/echarts/build/dist';
    public $js = [
		'echarts.min.js',
        './extension/dataTool.js',
    ];
}
