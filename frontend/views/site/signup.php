<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Trousers;
use frontend\models\Phoenix;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>
    
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'id'=>'usernamechange']) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'trousers')->Dropdownlist(
                    Trousers::dropdown(),['id'=>'trousers_id','prompt'=>'Select trousers']
                ) ?>

                <?= $form->field($model, 'phoenix')->Dropdownlist(
                    ['promet'=>' '],['id'=>'phoenix_id']
                ) ?>

                <?= $form->field($model, 'address')->textInput() ?>

                <?= $form->field($model, 'phone')->textInput(['id'=>'test']) ?>
                
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#trousers_id").change(function(){
            var trousers_id = $("#trousers_id").val();
            var url = "<?= Yii::$app->request->baseUrl.'/site/getvaluephoenix/' ?>";

            $.get(url , { trousers_id: trousers_id} ,function(data){
                //var data = $.parseJSON(data);
                //alert(data);
                
                $("#phoenix_id").html(data);
            });
        });
    });
</script>