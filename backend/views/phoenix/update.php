<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Phoenix */

$this->title = 'Update Phoenix: ' . $model->id_phoenix;
$this->params['breadcrumbs'][] = ['label' => 'Phoenixes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_phoenix, 'url' => ['view', 'id' => $model->id_phoenix]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phoenix-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
