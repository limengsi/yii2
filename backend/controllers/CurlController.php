<?php
/**
 * @author     : lims
 * @date       : 2025-01-08
 * @version    : 1.0
 * description :
 */

namespace  backend\controllers;

use backend\models\MyCurl;
use common\services\CurlService;
use Yii;

class CurlController extends  BaseController
{
    public function  actionIndex(){
        $model = new MyCurl();
        $model->init();
        if (Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            $model->respond = CurlService::request($model);
        }
        return $this->render('index',['model'=>$model]);
    }

}
