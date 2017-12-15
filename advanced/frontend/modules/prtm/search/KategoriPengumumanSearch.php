<?php

namespace frontend\modules\prtm\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\prtm\models\KategoriPengumuman;

/**
 * KategoriPengumumanSearch represents the model behind the search form about `frontend\modules\prtm\models\KategoriPengumuman`.
 */
class KategoriPengumumanSearch extends KategoriPengumuman
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kategori_pengumuman', 'created_by', 'updated_by', 'deleted'], 'integer'],
            [['deskripsi', 'created_at', 'updated_at'], 'safe'],
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
        $query = KategoriPengumuman::find();

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
            'id_kategori_pengumuman' => $this->id_kategori_pengumuman,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'deleted' => $this->deleted,
        ]);

        $query->andFilterWhere(['like', 'deskripsi', $this->deskripsi]);

        return $dataProvider;
    }
}
