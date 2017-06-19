<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tbl_orderdetail".
 *
 * @property integer $order_detail_id
 * @property integer $order_id
 * @property integer $product_id
 * @property integer $price_product
 * @property string $date_creater
 * @property integer $quantity
 */
class Orderdetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_orderdetail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'price_product', 'date_creater', 'quantity'], 'required'],
            [['order_id', 'product_id', 'price_product', 'quantity'], 'integer'],
            [['date_creater'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_detail_id' => 'Order Detail ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'price_product' => 'Price Product',
            'date_creater' => 'Date Creater',
            'quantity' => 'Quantity',
        ];
    }
}
