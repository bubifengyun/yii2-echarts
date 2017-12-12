<?php

namespace bubifengyun\echarts;

use Hisune\EchartsPHP\ECharts as EchartsPHP;
use Hisune\EchartsPHP\Doc\IDE\Series;
use Hisune\EchartsPHP\Doc\IDE\XAxis;
use Hisune\EchartsPHP\Doc\IDE\YAxis;
use bubifengyun\echarts\EChartsAsset;

class ECharts extends EchartsPHP
{
    public $_events = [];
    protected $jsVar;

    /**
     * @param $view string, dist of libraries
     */
    public function __construct($view)
    {
        $asset = EchartsAsset::register($view);
        parent::__construct($asset->baseUrl);
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
