<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Email */

$this->title = '创建邮件';
$this->params['breadcrumbs'][] = ['label' => 'Emails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="email-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
