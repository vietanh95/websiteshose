<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tbl_product".
 *
 * @property integer $product_id
 * @property string $name_product
 * @property integer $quantity_product
 * @property integer $price_product
 * @property string $information_product
 * @property integer $size_id
 * @property string $image_product
 * @property string $image1_product
 * @property string $image2_product
 * @property string $image3_product
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $qtt;
    public static function tableName()
    {
        return 'tbl_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_product', 'quantity_product', 'price_product', 'information_product', 'size_id', 'image_product', 'created_at', 'updated_at'], 'required'],
            [['quantity_product', 'price_product', 'size_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name_product'], 'string', 'max' => 50],
            [['information_product'], 'string', 'max' => 250],
            [['image_product', 'image1_product', 'image2_product', 'image3_product'], 'string', 'max' => 100],
            [['name_product'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'name_product' => 'Name Product',
            'quantity_product' => 'Quantity Product',
            'price_product' => 'Price Product',
            'information_product' => 'Information Product',
            'size_id' => 'Size ID',
            'image_product' => 'Image Product',
            'image1_product' => 'Image1 Product',
            'image2_product' => 'Image2 Product',
            'image3_product' => 'Image3 Product',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    public static function getAllProductHome($number){
        $data = Product::find()->where(['Status_Show_id'=>$number])->all();
        return $data;
    }
    public static function getAllProductLimit($limit = 7){
        $data = Product::find()->limit($limit)->orderBy(['product_id'=>SORT_DESC])->all();
        return $data;
    }
    public static function getdetailproduct($id){
        $data = Product::findOne($id);
        return $data;
    }
}
