<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProducttextSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Producttexts';
$this->params['breadcrumbs'][] = $this->title;
?>

 <?= Html::a('Upadte the Magic Javascript ', ['changethetext'], ['target'=>'_blank','class' => 'btn btn-success']) ?>
<div class="producttext-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
       
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'value_id',
            'entity_type_id',
            'attribute_id',
            'store_id',
            'entity_id',
            'value:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
