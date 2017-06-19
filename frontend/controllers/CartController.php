<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\components\Cart;
use backend\models\Product;
use frontend\models\Order;
/*
	
	class quan ly gio hang
*/
class CartController extends Controller{
	function actionIndex(){
		$cart = new Cart();
		$cartstore = $cart->cartstore;
		return $this->render('index',[
			'cartstore' =>$cartstore
		]);
	}
	public function actionAddcart($id){
		$cart = new Cart();
		$a = isset($_GET["quantity_".$id])?$_GET["quantity_".$id]:0;
		$quantity = $a;
		$model = Product::findOne(['product_id'=>$id]);
		$cart->add($model,$quantity);
		return $this->redirect(['/cart']);
	}
	public function actionRemove($id){
		$cart = new Cart();
		$model = Product::findOne(['product_id'=>$id]);
		$cart->remove($model);
		return $this->redirect(['/cart']);
	}
	public function actionDeletecart(){
		$cart = new Cart();
		//$model = Product::find()->all();
		$cart->delete();
		return $this->redirect(['/cart']);
	}
	public function actionEditcart($id){
		$cart = new Cart();
		$a = isset($_GET["numberquantity_".$id])?$_GET["numberquantity_".$id]:0;
		$quantity = $a;
		$model = Product::findOne(['product_id'=>$id]);
		$cart->editcart($model,$quantity);
		return $this->redirect(['/cart']);
	}
	
}