Easy use echarts in yii2 when offline.
======================================
Using hisune\echarts-php and bower-asset\echarts, complete it.

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
