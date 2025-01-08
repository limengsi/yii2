<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '邮件';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="email-index">

    <!--    <h1>--><? //= Html::encode($this->title) ?><!--</h1>-->
    <!--    --><?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('发送邮件', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => '序号',
            ],
            'to',
            'subject',
            [
                'label' => '发送状态',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->is_success ? '<span style="color: green">发送成功</span>' : '<span style="color: red">发送失败</span>';
                }
            ],
            [
                'label' => '发送时间',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->send_time ? date('Y-m-d', $model->send_time) : '';
                }
            ],
            [
                'label' => '操作',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::a('查看',['view','id'=>$model->id]);
                }
            ],
        ],
    ]); ?>
</div>
