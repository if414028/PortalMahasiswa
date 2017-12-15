<?php

namespace frontend\modules\prtm\models;

use Yii;

/**
 * This is the model class for table "kandidat_polling".
 *
 * @property integer $id_kandidat_polling
 * @property string $motivasi
 * @property string $foto_kandidat_polling
 * @property integer $id_mahasiswa
 * @property integer $id_polling
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted
 *
 * @property HasilPolling[] $hasilPollings
 * @property Polling $idPolling
 * @property Mahasiswa $idMahasiswa
 */
class KandidatPolling extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kandidat_polling';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'id_polling', 'created_by', 'updated_by', 'deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['motivasi'], 'string', 'max' => 1000],
            [['foto_kandidat_polling'], 'string', 'max' => 128],
            [['id_polling'], 'exist', 'skipOnError' => true, 'targetClass' => Polling::className(), 'targetAttribute' => ['id_polling' => 'id_polling']],
            [['id_mahasiswa'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::className(), 'targetAttribute' => ['id_mahasiswa' => 'id_mahasiswa']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kandidat_polling' => 'Id Kandidat polling',
            'motivasi' => 'Motivasi',
            'foto_kandidat_polling' => 'Foto Kandidat polling',
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
    public function getHasilPollings()
    {
        return $this->hasMany(HasilPolling::className(), ['id_kandidat_polling' => 'id_kandidat_polling']);
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
}
