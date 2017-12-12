<?php

namespace bubifengyun\echarts;

use Hisune\EchartsPHP\ECharts as EchartsPHP;
use Hisune\EchartsPHP\Config;;
use Hisune\EchartsPHP\Doc\IDE\Series;
use Hisune\EchartsPHP\Doc\IDE\XAxis;
use Hisune\EchartsPHP\Doc\IDE\YAxis;
use bubifengyun\echarts\EChartsAsset;
use bubifengyun\echarts\MapAsset;

class ECharts extends EchartsPHP
{
    public $_events = [];
    protected $jsVar;

    /**
     * @param $view string, dist of libraries
     */
    public function __construct($view, $map = null)
    {
        $asset = EchartsAsset::register($view);
        parent::__construct($asset->baseUrl);
        if (is_array($map)) {
            $mapAsset = MapAsset::register($view);
            $mapUrl = $mapAsset->baseUrl;
            foreach ($map as $part) {
                Config::addExtraScript($part, $mapUrl);
            }
        }
    }

    public function render($id, $attribute = array(), $theme = null)
    {
        return parent::render($id, $attribute, $theme);
    }

    public function getOption($render = null, $jsObject = false)
    {
        return parent::getOption($render, $jsObject);
    }

    public function setOption(array $options = array())
    {
        parent::setOption($options);
    }

    public function on($event, $callback)
    {
        parent::on($event, $callback);
    }

    public function setJsVar($name = null)
    {
        parent::setJsVar($name);
    }

    public function getJsVar($full = false)
    {
        return parent::getJsVar($full);
    }

    public function addSeries(Series $series)
    {
        parent::addSeries($series);
    }

    public function addXAxis(XAxis $xAxis)
    {
        parent::addXAxis($xAxis);
    }

    public function addYAxis(YAxis $yAxis)
    {
        parent::addYAxis($yAxis);
    }
}
