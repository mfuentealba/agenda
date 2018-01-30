<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblOferente;

/**
 * TblOferenteSearch represents the model behind the search form of `app\models\TblOferente`.
 */
class TblOferenteSearch extends TblOferente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['rut', 'nombres', 'ap_paterno', 'ap_materno', 'mail', 'user', 'pass', 'fecha_ingreso'], 'safe'],
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
        $query = TblOferente::find();

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
            'id' => $this->id,
            'fecha_ingreso' => $this->fecha_ingreso,
        ]);

        $query->andFilterWhere(['like', 'rut', $this->rut])
            ->andFilterWhere(['like', 'nombres', $this->nombres])
            ->andFilterWhere(['like', 'ap_paterno', $this->ap_paterno])
            ->andFilterWhere(['like', 'ap_materno', $this->ap_materno])
            ->andFilterWhere(['like', 'mail', $this->mail])
            ->andFilterWhere(['like', 'user', $this->user])
            ->andFilterWhere(['like', 'pass', $this->pass]);

        return $dataProvider;
    }
}
