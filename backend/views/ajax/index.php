<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
?>
<h1>ajax/index</h1>

<p>
    <?= Html::a('Active Ajax Product', ['ajax'], ['class' => 'btn btn-success','onclick'=>'clicktime()']) ?>       
</p>
<script type="text/javascript">
	function sendFirstCategory(){

        var test = "this is an ajax test";

        $.ajax({
            url: '<?php echo \Yii::$app->getUrlManager()->createUrl('ajax/ajax') ?>',
            type: 'POST',
             data: { test: test },
             success: function(data) {
                 $timedate = time();
                 alert($timedate);
             },
         });
    }

</script>
<script type="text/javascript">
	function clicktime(){
		$time = time();
		alert($time);
	}

</script>