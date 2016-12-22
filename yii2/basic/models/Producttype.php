<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_type".
 *
 * @property integer $id
 * @property string $name
 * @property string $information
 * @property integer $created_by_user_id
 * @property string $created
 * @property string $modified
 * @property integer $server_product_type_id
 * @property integer $active
 * @property string $inactivated
 */
class Producttype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'information'], 'string'],
            [['created_by_user_id', 'server_product_type_id', 'active'], 'integer'],
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
            'created_by_user_id' => 'Created By User ID',
            'created' => 'Created',
            'modified' => 'Modified',
            'server_product_type_id' => 'Server Product Type ID',
            'active' => 'Active',
            'inactivated' => 'Inactivated',
        ];
    }
}
