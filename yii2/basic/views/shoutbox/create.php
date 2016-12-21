<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Shoutbox */

$this->title = 'Create Shoutbox';
$this->params['breadcrumbs'][] = ['label' => 'Shoutboxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shoutbox-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
