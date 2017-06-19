<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Phoenix;

/**
 * PhoenixSearch represents the model behind the search form of `app\models\Phoenix`.
 */
class PhoenixSearch extends Phoenix
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_phoenix', 'id_trousers', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name_phoenix'], 'safe'],
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
        $query = Phoenix::find();

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
            'id_phoenix' => $this->id_phoenix,
            'id_trousers' => $this->id_trousers,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name_phoenix', $this->name_phoenix]);

        return $dataProvider;
    }
}
