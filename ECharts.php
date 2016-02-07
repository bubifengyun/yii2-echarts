<?php

namespace bubifengyun\echarts;

class ECharts extends Hisune\EchartsPHP\ECharts
{
    /**
     * @param $dist string, dist of libraries
     */
    public function __construct($view)
    {
        $asset = EchartsAsset::register($view);
        self::parent($asset->baseUrl);
    }
}

