<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name'=>'李蒙思的YII项目',
    'defaultRoute'=>'site/index',
    'charset'=>'UTF-8',
    'language'=>'zh',
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

    'on beforeRequest'=>function($event){
    }
];
