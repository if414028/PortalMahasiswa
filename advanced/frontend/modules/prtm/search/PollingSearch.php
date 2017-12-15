<?php

namespace frontend\modules\prtm\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\prtm\models\Polling;

/**
 * PollingSearch represents the model behind the search form about `frontend\modules\prtm\models\polling`.
 */
class PollingSearch extends Polling
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_polling', 'status', 'id_kategori_polling', 'jumlah_pemenang_wanita', 'jumlah_pemenang_pria', 'id_akun_admin', 'created_by', 'updated_by', 'deleted'], 'integer'],
            [['judul_polling', 'deskripsi', 'waktu_mulai', 'waktu_selesai', 'created_at', 'updated_at'], 'safe'],
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
        $query = Polling::find();

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
            'id_polling' => $this->id_polling,
            'status' => $this->status,
            'waktu_mulai' => $this->waktu_mulai,
            'waktu_selesai' => $this->waktu_selesai,
            'id_kategori_polling' => $this->id_kategori_polling,
            'jumlah_pemenang_wanita' => $this->jumlah_pemenang_wanita,
            'jumlah_pemenang_pria' => $this->jumlah_pemenang_pria,
            'id_akun_admin' => $this->id_akun_admin,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'deleted' => $this->deleted,
        ]);

        $query->andFilterWhere(['like', 'judul_polling', $this->judul_polling])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi]);

        return $dataProvider;
    }
}
