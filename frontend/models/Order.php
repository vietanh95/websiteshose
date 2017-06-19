<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tbl_order".
 *
 * @property integer $order_id
 * @property integer $order_user_id
 * @property string $order_date
 * @property integer $total
 * @property integer $status
 * @property string $user_ship
 * @property string $email_ship
 * @property string $address_ship
 * @property string $phone_ship
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_user_id', 'order_date', 'total', 'status', 'user_ship', 'email_ship', 'address_ship', 'phone_ship'], 'required'],
            [['order_user_id', 'total', 'status'], 'integer'],
            [['order_date'], 'safe'],
            [['user_ship', 'email_ship', 'address_ship', 'phone_ship'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'order_user_id' => 'Order User ID',
            'order_date' => 'Order Date',
            'total' => 'Total',
            'status' => 'Status',
            'user_ship' => 'User Ship',
            'email_ship' => 'Email Ship',
            'address_ship' => 'Address Ship',
            'phone_ship' => 'Phone Ship',
        ];
    }
}
