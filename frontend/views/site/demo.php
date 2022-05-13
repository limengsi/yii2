<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @author     : lims
 * @date       : 2022/5/12 17:12
 * @version    : 1.0
 * description :
 */
?>
<?php $form = ActiveForm::begin(); ?>
<?=$form->field($model,'name')?>
<?=$form->field($model,'email')?>
<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end();?>
