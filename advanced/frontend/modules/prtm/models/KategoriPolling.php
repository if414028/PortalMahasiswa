<?php

namespace frontend\modules\prtm\models;

use Yii;

/**
 * This is the model class for table "kategori_polling".
 *
 * @property integer $id_kategori_polling
 * @property string $deskripsi_polling
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted
 *
 * @property Polling[] $pollings
 */
class KategoriPolling extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori_polling';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'deleted'], 'integer'],
            [['deskripsi_polling'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kategori_polling' => 'Id Kategori polling',
            'deskripsi_polling' => 'Deskripsi polling',
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
    public function getPollings()
    {
        return $this->hasMany(Polling::className(), ['id_kategori_polling' => 'id_kategori_polling']);
    }
}
