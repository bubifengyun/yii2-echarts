<?php

namespace bubifengyun\echarts;

class ECharts extends Hisune\EchartsPHP\ECharts
{
    /**
     * @param $view string, dist of libraries
     */
    public function __construct($view = '')
    {
        if ($view == '') {
            $asset = EchartsAsset::register($view);
            self::parent($asset->baseUrl);
        } else {
            self::parent($view);
        }
    }
}
