<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Producttext */

$this->title = 'Create Producttext';
$this->params['breadcrumbs'][] = ['label' => 'Producttexts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producttext-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
