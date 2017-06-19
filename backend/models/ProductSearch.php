<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Product;

/**
 * ProductSearch represents the model behind the search form of `app\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'quantity_product', 'price_product', 'size_id', 'Status_Show_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name_product', 'information_product', 'image_product', 'image1_product', 'image2_product', 'image3_product'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Product::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'product_id' => $this->product_id,
            'quantity_product' => $this->quantity_product,
            'price_product' => $this->price_product,
            'size_id' => $this->size_id,
            'Status_Show_id' => $this->Status_Show_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name_product', $this->name_product])
            ->andFilterWhere(['like', 'information_product', $this->information_product])
            ->andFilterWhere(['like', 'image_product', $this->image_product])
            ->andFilterWhere(['like', 'image1_product', $this->image1_product])
            ->andFilterWhere(['like', 'image2_product', $this->image2_product])
            ->andFilterWhere(['like', 'image3_product', $this->image3_product]);

        return $dataProvider;
    }
}
