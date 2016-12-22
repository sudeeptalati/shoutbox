<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property integer $id
 * @property string $name
 * @property string $information
 * @property integer $active
 * @property integer $created_by_user_id
 * @property string $created
 * @property string $modified
 * @property string $inactivated
 * @property integer $server_brand_id
 */
class brands extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'information'], 'string'],
            [['active', 'created_by_user_id', 'server_brand_id'], 'integer'],
            [['created', 'modified', 'inactivated'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'information' => 'Information',
            'active' => 'Active',
            'created_by_user_id' => 'Created By User ID',
            'created' => 'Created',
            'modified' => 'Modified',
            'inactivated' => 'Inactivated',
            'server_brand_id' => 'Server Brand ID',
        ];
    }
}
