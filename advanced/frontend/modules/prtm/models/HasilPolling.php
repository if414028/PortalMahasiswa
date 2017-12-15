<?php

namespace frontend\modules\prtm\models;

use Yii;

/**
 * This is the model class for table "hasil_polling".
 *
 * @property integer $id_hasil_polling
 * @property integer $id_kandidat_polling
 * @property integer $id_mahasiswa
 * @property integer $id_polling
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted
 *
 * @property Polling $idPolling
 * @property Mahasiswa $idMahasiswa
 * @property KandidatPolling $idKandidatPolling
 */
class HasilPolling extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hasil_polling';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kandidat_polling', 'id_mahasiswa', 'id_polling', 'created_by', 'updated_by', 'deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id_polling'], 'exist', 'skipOnError' => true, 'targetClass' => Polling::className(), 'targetAttribute' => ['id_polling' => 'id_polling']],
            [['id_mahasiswa'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::className(), 'targetAttribute' => ['id_mahasiswa' => 'id_mahasiswa']],
            [['id_kandidat_polling'], 'exist', 'skipOnError' => true, 'targetClass' => KandidatPolling::className(), 'targetAttribute' => ['id_kandidat_polling' => 'id_kandidat_polling']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_hasil_polling' => 'Id Hasil polling',
            'id_kandidat_polling' => 'Id Kandidat polling',
            'id_mahasiswa' => 'Id mahasiswa',
            'id_polling' => 'Id polling',
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
    public function getIdPolling()
    {
        return $this->hasOne(Polling::className(), ['id_polling' => 'id_polling']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMahasiswa()
    {
        return $this->hasOne(Mahasiswa::className(), ['id_mahasiswa' => 'id_mahasiswa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKandidatPolling()
    {
        return $this->hasOne(KandidatPolling::className(), ['id_kandidat_polling' => 'id_kandidat_polling']);
    }
}
