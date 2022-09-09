<?php

use backend\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?=Yii::$app->name?></title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
<div class="box">
    <h2>lims系统登录</h2>
    <?php
    $from = ActiveForm::begin([
            'id'=>'login',
            'method'=>'post',
            'action'=>Url::toRoute(''),
    ]);
    echo $from->field($model,'username',['options'=>['class'=>'inputBox']])->textInput(['placeholder'=>'','id'=>'username','onkeyup'=>'next(event)','maxlength'=>10]),
    $from->field($model,'password',['options'=>['class'=>'inputBox']])->textInput(['placeholder'=>'','id'=>'password','onkeyup'=>'submits()','maxlength'=>10]);
    ActiveForm::end();
    ?>
</div>
<script type="text/javascript">
    window.onload=function(){
        document.getElementById('username').focus();
    }
    function next(event){
        if(event.keyCode !== 13){
            return false;
        }
        if(document.getElementById('username').value){
            document.getElementById('password').focus();
        }
    }

    function submits(){
        if(document.getElementById('password').value){
            document.getElementById('login').submit();
        }
    }
</script>
</body>
</html>
