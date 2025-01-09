<?php
/**
 * @author     : lims
 * @date       : 2025-01-08
 * @version    : 1.0
 * description :
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '创建请求';
$this->params['breadcrumbs'][] = ['label' => 'curl', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="email-create">

    <h1><?= Html::encode($this->title) ?></h1>


    <div class="email-form">

        <?php $form = ActiveForm::begin([
            'method'=>'post',
        ]); ?>

        <?= $form->field($model, 'url')->textInput(['maxlength' => 255,'style'=>'display:table-cell']) ?>

        <?= $form->field($model, 'method')->dropDownList(['post'=>'post','get'=>'get']) ?>
<!---->
        <?= $form->field($model, 'header')->textarea(['rows' => 3]) ?>

        <?= $form->field($model, 'params')->textarea(['rows' => 6]) ?>

        <div class="form-group">

        <?php
            if ($model->respond){
                echo Html::tag('label','返回结果');
                echo "<pre>".$model->respond."</pre>";
            }

        ?>
        </div>

        <div class="form-group">
            <?= Html::submitButton('发送请求', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
