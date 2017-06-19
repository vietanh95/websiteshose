<?php

namespace frontend\components;
use Yii;

/*xu ly gio hang*/

/*gom cac phuong thuc*/

class Cart{

	/*
	phuon thuc them vao gio hang co cac tham so sau
	@data = se lau theo id or slug
	@quantity = so luong moi lan them vao gio hang thuong la 1
	*/

	/*khoi tao session trong yii su dung Yii::$app->session["ten_session"] = "giatri";
	lay gia tri cua session su dung $session =  Yii::$app->session["ten_session"]*/
	public $cartstore;
	public function __construct(){
		$this->cartstore = Yii::$app->session['cart'];
	}

	public function add($data, $quantity){

		if(isset($this->cartstore[$data->product_id])){
			$this->cartstore[$data->product_id]->qtt = $this->cartstore[$data->product_id]->qtt + $quantity;	
			Yii::$app->session["cart"] = $this->cartstore;
		}
		else{
			$this->cartstore[$data->product_id] = $data;
			$this->cartstore[$data->product_id]->qtt = $quantity;
			Yii::$app->session["cart"] = $this->cartstore;
		}
	}
	public function editcart($data,$quantity){
		if($quantity<1){
			unset($this->cartstore[$data->product_id]);
			Yii::$app->session["cart"] = $this->cartstore;
		}
		else{
			$this->cartstore[$data->product_id]->qtt = $quantity;
			Yii::$app->session["cart"] = $this->cartstore;
		}
	}
	public function remove($data){
		unset($this->cartstore[$data->product_id]);
		Yii::$app->session["cart"] = $this->cartstore;
	}
	public function delete(){
		Yii::$app->session->destroy();
	}
}
?>