<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Email */

$this->title = '邮件详情';
$this->params['breadcrumbs'][] = ['label' => '邮件', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="email-view">


    <p>
        <?= Html::a('返回列表', ['index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'from',
            [
                'attribute' => 'to',
                'format'=>'raw',
                'value' => str_replace(',','<br>',$model->to),
            ],
            'subject',
            'body:ntext',
            [
                'label' => '发送状态',
                'value' => $model->is_success > 0 ? '发送成功' : '发送失败',
            ],
            [
                'label' => '发送时间',
                'value' => $model->send_time > 0 ? date('Y-m-d H:i:s',$model->send_time): '',
            ],
        ],
    ]) ?>

</div>
