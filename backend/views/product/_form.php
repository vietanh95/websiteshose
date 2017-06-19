<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_product')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantity_product')->textInput() ?>

    <?= $form->field($model, 'price_product')->textInput() ?>

    <?= $form->field($model, 'information_product')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size_id')->textInput() ?>

    <?= $form->field($model, 'Status_Show_id')->textInput() ?>

    <?= $form->field($model, 'image_product')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image1_product')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image2_product')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image3_product')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
    
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
