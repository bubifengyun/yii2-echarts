<?php

namespace bubifengyun\echarts;

use Hisune\EchartsPHP\ECharts as EchartsPHP;
use bubifengyun\echarts\EChartsAsset;

class ECharts extends EchartsPHP
{
    /**
     * @param $view string, dist of libraries
     */
    public function __construct($view)
    {
        $asset = EchartsAsset::register($view);
        parent::__construct($asset->baseUrl);
    }
}
