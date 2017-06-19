<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_trousers_phoenix".
 *
 * @property int $id_phoenix
 * @property int $id_trousers
 * @property string $name_phoenix
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Phoenix extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_trousers_phoenix';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_trousers', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name_phoenix'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_phoenix' => 'Id Phoenix',
            'id_trousers' => 'Id Trousers',
            'name_phoenix' => 'Name Phoenix',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
