<?php

use backend\assets\AppAsset;
use yii\captcha\Captcha;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<div class="box">
    <h2>后台登录</h2>
    <?php
    $form = ActiveForm::begin([
            'id'=>'login',
            'method'=>'post',
            'action'=>Url::toRoute(''),
    ]);
    ?>
    <?=$form->field($model,'username',['options'=>['class'=>'inputBox']])->textInput(['placeholder'=>'','id'=>'username','maxlength'=>16])?>
    <?=$form->field($model,'password',['options'=>['class'=>'inputBox']])->passwordInput(['placeholder'=>'','id'=>'password','maxlength'=>32])?>
    <?=$form->field($model, 'verifyCode',['options'=>['class'=>'inputBox']])->widget(Captcha::className(), [
        'captchaAction' => 'site/captcha',
        'template' => '{input}{image}',
    ]);?>
<!--    <div class="inputBox">-->
        <input class="form-control login_submit" type="submit" value="登  录">
<!--    </div>-->
    <?php ActiveForm::end();?>
</div>
<script type="text/javascript">
    window.onload=function(){
        document.getElementById('username').focus();
    }
</script>
</body>
</html>
