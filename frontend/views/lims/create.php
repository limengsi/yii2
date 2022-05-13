<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LimsUser */

$this->title = 'Create Lims User';
$this->params['breadcrumbs'][] = ['label' => 'Lims Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lims-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
