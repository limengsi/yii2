<?php
/**
 * @author     : lims
 * @date       : 2022/5/12 17:08
 * @version    : 1.0
 * description :
 */


namespace frontend\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }

    public function attributeLabels()
    {
        return [
          'name'=>Yii::t('app','姓名'),
          'email'=>Yii::t('app','邮箱'),
        ];
    }
}