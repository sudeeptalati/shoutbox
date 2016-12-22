<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProducttextSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producttext-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'value_id') ?>

    <?= $form->field($model, 'entity_type_id') ?>

    <?= $form->field($model, 'attribute_id') ?>

    <?= $form->field($model, 'store_id') ?>

    <?= $form->field($model, 'entity_id') ?>

    <?php // echo $form->field($model, 'value') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
