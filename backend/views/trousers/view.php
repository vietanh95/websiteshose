<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Trousers */

$this->title = $model->id_trousers;
$this->params['breadcrumbs'][] = ['label' => 'Trousers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trousers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_trousers], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_trousers], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_trousers',
            'name_trousers',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
