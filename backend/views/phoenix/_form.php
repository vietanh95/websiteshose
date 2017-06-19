<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Trousers;
/* @var $this yii\web\View */
/* @var $model app\models\Phoenix */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phoenix-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_trousers')->Dropdownlist(
        ArrayHelper::map(Trousers::find()->all(),'id_trousers','name_trousers'),['prompt'=>'Select Trousers']
    ) ?>

    <?= $form->field($model, 'name_phoenix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
