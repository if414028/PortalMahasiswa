<?php

namespace frontend\modules\prtm\models;

use Yii;

/**
 * This is the model class for table "kategori_pengumuman".
 *
 * @property integer $id_kategori_pengumuman
 * @property string $deskripsi
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted
 *
 * @property Pengumuman[] $pengumumen
 */
class KategoriPengumuman extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori_pengumuman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deskripsi'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'deleted'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kategori_pengumuman' => 'Id Kategori pengumuman',
            'deskripsi' => 'Deskripsi',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'deleted' => 'Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengumumen()
    {
        return $this->hasMany(Pengumuman::className(), ['id_kategori_pengumuman' => 'id_kategori_pengumuman']);
    }
}
