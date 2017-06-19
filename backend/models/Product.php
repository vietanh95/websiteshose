<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_product".
 *
 * @property int $product_id
 * @property string $name_product
 * @property int $quantity_product
 * @property int $price_product
 * @property string $information_product
 * @property int $size_id
 * @property int $Status_Show_id
 * @property string $image_product
 * @property string $image1_product
 * @property string $image2_product
 * @property string $image3_product
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['quantity_product', 'price_product', 'size_id', 'Status_Show_id', 'status', 'created_at', 'updated_at'], 'integer'],
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
            'Status_Show_id' => 'Status  Show ID',
            'image_product' => 'Image Product',
            'image1_product' => 'Image1 Product',
            'image2_product' => 'Image2 Product',
            'image3_product' => 'Image3 Product',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
