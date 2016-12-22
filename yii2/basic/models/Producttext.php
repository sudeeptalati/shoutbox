<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalog_product_entity_text".
 *
 * @property integer $value_id
 * @property integer $entity_type_id
 * @property integer $attribute_id
 * @property integer $store_id
 * @property integer $entity_id
 * @property string $value
 */
class Producttext extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'catalog_product_entity_text';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['entity_type_id', 'attribute_id', 'store_id', 'entity_id'], 'integer'],
            [['value'], 'string'],
            [['entity_id', 'attribute_id', 'store_id'], 'unique', 'targetAttribute' => ['entity_id', 'attribute_id', 'store_id'], 'message' => 'The combination of Attribute ID, Store ID and Entity ID has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'value_id' => 'Value ID',
            'entity_type_id' => 'Entity Type ID',
            'attribute_id' => 'Attribute ID',
            'store_id' => 'Store ID',
            'entity_id' => 'Entity ID',
            'value' => 'Value',
        ];
    }
    

	public function loadmymagicjavascriptrows()
	{
		//return "I AM CALED";
		
		
		return $this::find()
        ->where('value LIKE :query')
        ->addParams([':query'=>'%document.getElementById%'])
        ->limit(1000)
        ->all();

	}///ednd of public function loadmymagicjavascriptrows()
	
 	
 	
 	public function updatethenewvalue($id, $value)
	{
	
	$product_text_record = $this::findOne($id);
	$product_text_record->value = $value;
	 
	
	if ($product_text_record->update() !== null) {
    	return 'Successfully Saved';
    } else {
		throw new NotFoundHttpException('CAnnot save.');
	}

	}///end of function updatethenewvalue($id, $value)

 
}
