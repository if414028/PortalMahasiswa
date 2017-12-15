<?php

namespace frontend\modules\prtm\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\prtm\models\KandidatPolling;

/**
 * KandidatPollingSearch represents the model behind the search form about `frontend\modules\prtm\models\kandidat-polling`.
 */
class KandidatPollingSearch extends KandidatPolling
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kandidat_polling', 'id_mahasiswa', 'id_polling', 'created_by', 'updated_by', 'deleted'], 'integer'],
            [['motivasi', 'foto_kandidat_polling', 'created_at', 'updated_at'], 'safe'],
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
        $query = KandidatPolling::find();

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
            'id_kandidat_polling' => $this->id_kandidat_polling,
            'id_mahasiswa' => $this->id_mahasiswa,
            'id_polling' => $this->id_polling,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'deleted' => $this->deleted,
        ]);

        $query->andFilterWhere(['like', 'motivasi', $this->motivasi])
            ->andFilterWhere(['like', 'foto_kandidat_polling', $this->foto_kandidat_polling]);

        return $dataProvider;
    }
}
