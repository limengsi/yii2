<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LimsUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lims Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lims-user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lims User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'password',
            'nickname',
            'status',
            //'create_time:datetime',
            //'update_time:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end();?>
</div>

<div>
    asdasdasdasd
    asdasd
    <p>
        123
    </p>
</div>