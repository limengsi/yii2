<?php
/**
 * @author     : lims
 * @date       : 2025-01-08
 * @version    : 1.0
 * description :
 */

namespace backend\models;

use yii\base\Model;

class MyCurl extends Model
{

    public  $url = '';
    public $header;
    public $method = 'post';
    public $params;
    public $respond;


    public function rules()
    {
        return [
            ['url', 'required'],
            [['header', 'method', 'params'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'url' => 'URL',
            'method' => '链接方式',
            'params' => '参数',
            'respond' => '请求结果',
        ];
    }
}
