<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shoutbox".
 *
 * @property integer $id
 * @property string $sendername
 * @property string $subject
 * @property string $text
 * @property integer $created
 * @property integer $status
 * @property integer $ip
 *
 */
class Shoutbox extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shoutbox';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sendername', 'subject', 'text', 'ip'], 'string'],
            [['created', 'status'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sendername' => 'Sendername',
            'subject' => 'Subject',
            'text' => 'Text',
            'created' => 'Created',
            'status' => 'Status',
            'ip'=>'Sender IP',
        ];
    }

    public function beforeSave($insert)
    {
        if($this->isNewRecord)
        {
            $this->created=time();
            $this->status='1';
            $this->ip=$this->getuserip();
            return true;
        }
    }///end of before save


    public function getuserip()
    {
        return ip2long(Yii::$app->request->userIP);
    }
}
