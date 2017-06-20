<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\widgets\Pjax;
use kartik\editable\Editable;


/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create User', ['value'=>Url::to(Yii::$app->request->baseUrl.'/user/create/'), 'class' => 'btn btn-success','id'=>'modalbutton']) ?>
    </p>
    <?php
        Modal::begin([
            'header'=>'<h3>Create User</h3>',
            'id'=>'modal',
            'size'=>'modal-lg',
        ]);
        echo "<div id='modalContent'></div>";
        Modal::end();

    ?>
     <?php Pjax::begin(['id'=>'createuserGrid']) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax'=>true,
        'export'=>false,
        'columns' => [
            'id',
            [
                'class'=>'kartik\grid\EditableColumn',
                'attribute'=>'username',
            ],
            'auth_key',
            'password_hash',
            'password_reset_token',
            // 'email:email',
            // 'address',
            // 'phone',
            // 'status',
            // 'created_at',
            // 'updated_at',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end() ?>
</div>
