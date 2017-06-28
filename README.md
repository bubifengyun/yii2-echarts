Easy use echarts in yii2 when offline.
======================================
Using hisune\echarts-php and bower-asset\echarts, complete it.
使用 `hisune\echarts-php` 和 `bower-asset\echarts`，这样代码安装完成后，可以离线使用，不用每次都要联网去查百度的echarts。
但是安装会比较慢，请慢慢等待。
本代码最初实现在[yiichina](http://www.yiichina.com/tutorial/503)，曾提议改成单独的形式，遂有了本代码。功能完全等同于 `hisune\echarts-php`，唯独不用使用的时候不用联网找百度echarts。
详细使用方法参考:https://github.com/hisune/Echarts-PHP

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist bubifengyun/yii2-echarts "*"
```

or add

```
"bubifengyun/yii2-echarts": "*"
```

to the require section of your `composer.json` file.


Usage
-----

详细使用方法参考: https://github.com/hisune/Echarts-PHP 。不同之处在于本文只实现了其 `ECharts` 部分。使用的类名字可能需要做修改。

Once the extension is installed, simply use it in your code by  :

```php
<?php

use bubifengyun\echarts\ECharts;

$chart = new ECharts();
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
