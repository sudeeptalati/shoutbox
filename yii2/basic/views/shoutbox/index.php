<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shoutboxes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shoutbox-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Shoutbox', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sendername:ntext',
            'subject:ntext',
            'text:ntext',
            'created',
            'status',

            [
                'attribute' => 'created',
                'format' => ['date', 'php:d-M-Y h:i:s a']
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
