<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\components\Cart;
use backend\models\Product;
use frontend\models\Order;
use frontend\models\Orderdetail;

class CheckoutController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	//$userID = isset(Yii::$app->user->isGuest)?Yii::$app->user->identity->id:0;
    	$model = Order::find()->all();
        return $this->render('index',['model'=>$model]);
    }
    public function actionShowcheckuser(){
    	if(Yii::$app->user->isGuest){
                            $numbermodel = 0;
                        }
                        else{
                            $numbermodel = Yii::$app->user->identity->id;
                        }
    	$model = Order::find()->where(['order_user_id'=>$numbermodel])->all();
        return $this->render('index',['model'=>$model]);
    }
    public function actionDocheckout(){
		$cart = new Cart();
		$total = 0;
		$cartstore = $cart->cartstore;
			foreach ($cartstore as $rows) {
				$total = $total+ $rows->qtt*$rows->price_product;
			}	
			$modelOrder = new Order();
			$modelOrder->order_user_id = isset(Yii::$app->user->isGuest)?Yii::$app->user->identity->id:0;
			/*if(!Yii::$app->user->isGuest)
			{ Yii::$app->user->identity->id;}else{}*/
			$modelOrder->order_date = date("Y-m-d");
			$modelOrder->total = $total;
			$modelOrder->status = 1;
			$modelOrder->user_ship = $_GET['username'] ;
			$modelOrder->email_ship = $_GET['email'];
			$modelOrder->address_ship = $_GET['address'];
			$modelOrder->phone_ship = $_GET['phone'];
			if($modelOrder->save()){
				/*insert order_detail*/
				$orderID = $modelOrder->order_id;
				foreach ($cartstore as $rows) {
					$modelOrderDetail = new Orderdetail;
					$modelOrderDetail->order_id = $orderID;
					$modelOrderDetail->product_id = $rows->product_id;
					$modelOrderDetail->price_product = $rows->price_product;
					$modelOrderDetail->date_creater = date("Y-m-d");
					$modelOrderDetail->quantity = $rows->qtt;
					if($modelOrderDetail->save()){
						//return $this->redirect(['/checkout']);
					}
				}
				
			}
			
			/*echo isset(Yii::$app->user->isGuest)==true?Yii::$app->user->identity->id:0;
			echo $modelOrder->order_date;
			echo $modelOrder->total;
			echo $modelOrder->status;
			echo $_GET['username'];
			echo $_GET['email'];
			echo $_GET['address'];
			echo $_GET['phone'];*/

			/*echo $modelOrderDetail->order_id = $modelOrder->order_id.'</br>';
			echo $modelOrderDetail->product_id = $rows->product_id.'</br>';
			echo $modelOrderDetail->price_product = $rows->price_product.'</br>';
			echo $modelOrderDetail->date_creater = date("Y-m-d").'</br>';
			echo $modelOrderDetail->price_product = $rows->qtt.'</br>';*/
		return $this->redirect(['/checkout/showcheckuser/']);
	}
}
