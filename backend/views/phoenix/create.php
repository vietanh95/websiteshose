<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Phoenix */

$this->title = 'Create Phoenix';
$this->params['breadcrumbs'][] = ['label' => 'Phoenixes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phoenix-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
