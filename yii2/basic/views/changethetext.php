<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Producttext */
/* @var $form ActiveForm */
?>
<div class="changethetext">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'entity_type_id') ?>
        <?= $form->field($model, 'attribute_id') ?>
        <?= $form->field($model, 'store_id') ?>
        <?= $form->field($model, 'entity_id') ?>
        <?= $form->field($model, 'value') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- changethetext -->
