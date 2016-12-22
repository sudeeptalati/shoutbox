<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Producttypes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producttype-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Producttype', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name:ntext',
            'information:ntext',
            'created_by_user_id',
            'created',
            // 'modified',
            // 'server_product_type_id',
            // 'active',
            // 'inactivated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
