<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use backend\models\PhoenixSearch;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TrousersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trousers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trousers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Trousers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
        [
            'class' => 'kartik\grid\ExpandRowColumn',        
            'value' => function ($model, $key, $index, $column) {
                    return GridView::ROW_COLLAPSED;
            },
            'detail'=>function ($model, $key, $index, $column) {
                    $searchModel = new PhoenixSearch();
                    $searchModel->id_trousers = $model->id_trousers;
                    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                    return Yii::$app->controller->renderPartial('_viewphoenix.php', [
                        'searchModel' => $searchModel,
                        'dataProvider' => $dataProvider,
                    ]);
                },
            ],
            'name_trousers',
            'status',
            'created_at',
            'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
