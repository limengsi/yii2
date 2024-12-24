<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name'=>'火星救援',
    'defaultRoute'=>'site/index',
    'charset'=>'UTF-8',
    'language'=>'zh-CN',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,//是否显示index.php
            'enableStrictParsing' => false,
//            'suffix' => '.html',//后缀名
            'rules' => [

            ],
        ],
    ],
    'aliases' => [
        //composer安装后路径不对，调整一下路径
        '@bower' => '@vendor/bower-asset',
    ],
    'on beforeRequest'=>function($event){
    }
];
