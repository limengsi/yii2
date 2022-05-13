<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lims_user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $nickname
 * @property int $status
 * @property int $create_time
 * @property int $update_time
 */
class LimsUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lims_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['status', 'create_time', 'update_time'], 'integer'],
            [['username'], 'string', 'max' => 32],
            [['password', 'nickname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'nickname' => 'Nickname',
            'status' => 'Status',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
