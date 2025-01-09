<?php
/**
 * @author     : lims
 * @date       : 2024-12-25
 * @version    : 1.0
 * description :
 */

namespace console\jobs;

use backend\models\Email;
use Yii;
use yii\base\BaseObject;
use yii\queue\JobInterface;

class SendEmail extends BaseObject implements JobInterface
{
    public $id;

    public function execute($queue)
    {
        file_put_contents('E:\insert.log',json_encode($queue). "\n",FILE_APPEND);
        throw  new \Exception(123);
        return false;
        $model = Email::findOne($this->id);
        file_put_contents('E:\insert.log',($model? json_encode($model->toArray(),JSON_UNESCAPED_UNICODE): 'empty') . "\n",FILE_APPEND);
        return ;
        if (!$model){

        }
        $res = Yii::$app->mailer->compose()
            ->setFrom($model->from)
            ->setTo($model->to)
            ->setSubject($model->subject)
            ->setHtmlBody($model->body)
            ->send();
        file_put_contents('E:\insert.log',json_encode($model->toArray()) . "\n",FILE_APPEND);
    }
}

