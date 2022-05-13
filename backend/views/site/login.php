<?php

use yii\helpers\Html;
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
    <?php $from = ActiveForm::begin();?>
    <?=$from->field($model,'username')?>
    <?=$from->field($model,'password')?>
    <div class="form-group">
        <?=Html::submitButton('登录')?>
    </div>
    <?php ActiveForm::end();?>
<!--    <form>-->
<!--        <div class="inputBox">-->
<!--            <input type="text" name="" required="">-->
<!--            <label>用户名</label>-->
<!--        </div>-->
<!--        <div class="inputBox">-->
<!--            <input type="password" name="" required="">-->
<!--            <label>密码</label>-->
<!--        </div>-->
<!--        <input type="submit" name="" value="登录">-->
<!--    </form>-->
</div>
</body>
</html>
