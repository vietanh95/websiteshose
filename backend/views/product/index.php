<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
use kartik\export\ExportMenu;
use dosamigos\tableexport\ButtonTableExport;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use backend\models\Product;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php  ?>
    <p>
        <?= Html::Button('Create Product', ['value'=>Url::to(Yii::$app->request->baseUrl.'/product/create'), 'class' => 'btn btn-success','id'=>'modalButton']) ?>       
    </p>

       <?php
       Modal::begin([
            'id'=>'modal',
            'size'=>'modal-lg', 
        ]);
        echo "<div id='modalContent'></div>";
        Modal::end();
       ?>
       <?php 
       //data-toggle="modal" data-target="#myModal"
            $gridColumns = [
                ['class' => 'yii\grid\SerialColumn'],
                'product_id',
                'name_product',
                'price_product',
                ['class' => 'yii\grid\ActionColumn'],
            ];

            // Renders a export dropdown menu
            echo ExportMenu::widget([
                'dataProvider' => $dataProvider,
                'columns' => $gridColumns
            ]);

            /*// You can choose to render your own GridView separately
            echo \kartik\grid\GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => $gridColumns
            ]);*/
        ?>

        <?php
        /*
        $dataProvider = new ActiveDataProvider([
            'query' => Product::find(), // goi lop model de thuc hien cau truy van
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        echo ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => 'create', // file php can include be view
        ]);*/

        ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'product_id',
            'name_product',
            'quantity_product',
            'price_product',
            'information_product',
            // 'size_id',
            // 'Status_Show_id',
            // 'image_product',
            // 'image1_product',
            // 'image2_product',
            // 'image3_product',
            // 'status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
<!-- Button trigger modal -->
