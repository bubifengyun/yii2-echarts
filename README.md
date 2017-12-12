Easy use echarts in yii2 when offline.
======================================
Yii2 离线使用百度 echarts
======================================

使用 `hisune\echarts-php` 和 `bower-asset\echarts`，这样代码安装完成后，可以离线使用，不用每次都要联网去查百度的echarts。
但是安装会比较慢，请慢慢等待。
本代码最初实现在[yiichina](http://www.yiichina.com/tutorial/503)，曾提议改成单独的形式，遂有了本代码。功能是 `hisune\echarts-php` 的部分实现，唯独使用时不用联网找百度echarts。

Installation
------------
安装
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require bubifengyun/yii2-echarts "@dev"
```

or add

```
"bubifengyun/yii2-echarts": "@dev"
```

to the require section of your `composer.json` file.


Usage
-----
用法
-----

详细使用方法参考: https://github.com/hisune/Echarts-PHP 。不同之处在于本文只实现了其 `ECharts` 部分。使用的类名字可能需要做修改。

Once the extension is installed, simply use it in your code by  :

```php
<?php

use bubifengyun\echarts\ECharts;

$chart = new ECharts($this);
$chart->tooltip->show = true;
$chart->legend->data = array('销量');
$chart->xAxis = array(
    array(
        'type' => 'category',
        'data' => array("衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子")
    )
);
$chart->yAxis = array(
    array('type' => 'value')
);
$chart->series = array(
    array(
        'name' => '销量',
        'type' => 'bar',
        'data' => array(5, 20, 40, 10, 10, 20)
    )
);
echo $chart->render('simple-custom-id');
```

画个世界地图

```php

use Hisune\EchartsPHP\Doc\IDE\Series;
use bubifengyun\echarts\ECharts;

// $this 传递 echarts.min.js 的位置， 后面
// 数组 world.js 传递的是 world.js 的位置
// 为了显示 中国的地图，用 ['china.js']
// 为了显示某个省份的地图，用['province/anhui.js']
// 同时，对应的 $series->map 也要修改。
$chart = new ECharts($this, ['world.js']);
$chart->visualMap->min = 0;
$chart->visualMap->max = 100;
$chart->visualMap->text = ['High', 'Low'];
$chart->visualMap->calculable = true;
$chart->visualMap->inRange->color = ['#C843C8', '#441744'];
$chart->tooltip->trigger = 'item';
$chart->tooltip->formatter = '{a}<br>{b}  {c}';
$series = new Series();
$series->name = 'Times';
$series->type = 'map';
$series->map = 'world';
// echart默认是用不规范的英文国家名做映射关系，这里转为标准的ISO3166-1国家短码
$series->nameMap = \Hisune\EchartsPHP\Countries::nameMap();
// 在data中使用ISO3166-1国家短码
$series->data = [
    [
        'name' => 'CN',
        'value' => 100,
    ],
    [
        'name' => 'US',
        'value' => 50,
    ],
    [
        'name' => 'RU',
        'value' => 80,
    ],
    [
        'name' => 'IN',
        'value' => 20,
    ],
    [
        'name' => 'CA',
        'value' => 80,
    ],
    [
        'name' => 'AU',
        'value' => 30,
    ]
];
$series->label->emphasis->show = false;
$series->label->emphasis->textStyle->color = '#fff';
$series->roam = true;
$series->scaleLimit->min = 1;
$series->scaleLimit->max = 5;
$series->itemStyle->normal->borderColor = '#bbb';
$series->itemStyle->normal->areaColor = '#F5F6FA';
$series->itemStyle->emphasis->areaColor = '#441744';
$chart->addSeries($series);
echo $chart->render('map', ['style' => 'height: 500px;']);

```

画个中国地图

```php
use Hisune\EchartsPHP\Doc\IDE\Series;
use bubifengyun\echarts\ECharts;



$chart = new ECharts($this, ['china.js']);
$chart->visualMap->min = 0;
$chart->visualMap->max = 100;
$chart->visualMap->text = ['高', '低'];
$chart->visualMap->calculable = true;
$chart->visualMap->inRange->color = ['#C843C8', '#441744'];
$chart->tooltip->trigger = 'item';
$chart->tooltip->formatter = '{a}<br>{b}  {c}';
$series = new Series();
$series->name = '人员数目';
$series->type = 'map';
$series->map = 'china';
$series->data = [
    [
        'name' => '安徽',
        'value' => 100,
    ],
    [
        'name' => '北京',
        'value' => 50,
    ],
    [
        'name' => '四川',
        'value' => 80,
    ],
    [
        'name' => '湖北',
        'value' => 20,
    ],
    [
        'name' => '上海',
        'value' => 80,
    ],
];
$series->label->emphasis->show = false;
$series->label->emphasis->textStyle->color = '#fff';
$series->roam = true;
$series->scaleLimit->min = 1;
$series->scaleLimit->max = 5;
$series->itemStyle->normal->borderColor = '#bbb';
$series->itemStyle->normal->areaColor = '#F5F6FA';
$series->itemStyle->emphasis->areaColor = '#441744';
$chart->addSeries($series);
echo $chart->render('map', ['style' => 'height: 500px;']);

```

省份的地图不会画。


Ref
-----
参考
-----

+ http://www.yiichina.com/tutorial/503
+ https://github.com/hisune/Echarts-PHP
+ https://github.com/ecomfe/echarts

License
-------
许可证
-----

BSD and MIT 
