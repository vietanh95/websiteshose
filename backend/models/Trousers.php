<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_trousers".
 *
 * @property int $id_trousers
 * @property string $name_trousers
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Trousers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_trousers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['name_trousers'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_trousers' => 'Id Trousers',
            'name_trousers' => 'Name Trousers',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
