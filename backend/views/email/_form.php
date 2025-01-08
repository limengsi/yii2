<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Email */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="email-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'to[]')->widget(\kartik\select2\Select2::className(),[
        'data'=>[
            'limsvip@qq.com'=>'limengsi',
            'limsmvp@qq.com'=>'lims',
        ],
        'options'=>['placeholder'=>'请选择','width'=>'100px'],
        'pluginOptions' => [
            'allowClear' => true,
            'multiple' => true,
        ]
    ]) ?>
    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'files')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('发送邮件', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
