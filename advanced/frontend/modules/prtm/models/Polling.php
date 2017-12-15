<?php

namespace frontend\modules\prtm\models;

use Yii;

/**
 * This is the model class for table "polling".
 *
 * @property integer $id_polling
 * @property string $judul_polling
 * @property string $deskripsi
 * @property integer $status
 * @property string $waktu_mulai
 * @property string $waktu_selesai
 * @property integer $id_kategori_polling
 * @property integer $jumlah_pemenang_wanita
 * @property integer $jumlah_pemenang_pria
 * @property integer $id_akun_admin
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted
 *
 * @property HasilPolling[] $hasilPollings
 * @property KandidatPolling[] $kandidatPollings
 * @property KategoriPolling $idKategoriPolling
 * @property AkunAdmin $idAkunAdmin
 * @property Voter[] $voters
 */
class Polling extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'polling';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'id_kategori_polling', 'jumlah_pemenang_wanita', 'jumlah_pemenang_pria', 'id_akun_admin', 'created_by', 'updated_by', 'deleted'], 'integer'],
            [['waktu_mulai', 'waktu_selesai', 'created_at', 'updated_at'], 'safe'],
            [['judul_polling'], 'string', 'max' => 100],
            [['deskripsi'], 'string', 'max' => 255],
            [['id_kategori_polling'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPolling::className(), 'targetAttribute' => ['id_kategori_polling' => 'id_kategori_polling']],
            [['id_akun_admin'], 'exist', 'skipOnError' => true, 'targetClass' => AkunAdmin::className(), 'targetAttribute' => ['id_akun_admin' => 'akun_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_polling' => 'Id polling',
            'judul_polling' => 'Judul polling',
            'deskripsi' => 'Deskripsi',
            'status' => 'Status',
            'waktu_mulai' => 'Waktu Mulai',
            'waktu_selesai' => 'Waktu Selesai',
            'id_kategori_polling' => 'Id Kategori polling',
            'jumlah_pemenang_wanita' => 'Jumlah Pemenang Wanita',
            'jumlah_pemenang_pria' => 'Jumlah Pemenang Pria',
            'id_akun_admin' => 'Id Akun Admin',
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
        return $this->hasMany(HasilPolling::className(), ['id_polling' => 'id_polling']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKandidatPollings()
    {
        return $this->hasMany(KandidatPolling::className(), ['id_polling' => 'id_polling']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKategoriPolling()
    {
        return $this->hasOne(KategoriPolling::className(), ['id_kategori_polling' => 'id_kategori_polling']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAkunAdmin()
    {
        return $this->hasOne(AkunAdmin::className(), ['akun_id' => 'id_akun_admin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVoters()
    {
        return $this->hasMany(Voter::className(), ['id_polling' => 'id_polling']);
    }
}
