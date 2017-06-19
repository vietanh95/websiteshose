<?php

namespace backend\controllers;

class AjaxController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionAjax(){
    	if(isset($_POST['test'])){
        $test = "Ajax Worked hello world!";
	    }
	    else{
	        $test = "Ajax failed";
	    }
	    return $test;
	    }
}
