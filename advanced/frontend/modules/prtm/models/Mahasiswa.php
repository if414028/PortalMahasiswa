<?php

namespace frontend\modules\prtm\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property integer $id_mahasiswa
 * @property integer $id_prodi
 * @property string $alamat
 * @property string $bio
 * @property string $nama_cantik
 * @property string $username
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted
 *
 * @property HasilKuis[] $hasilKuis
 * @property HasilPolling[] $hasilPollings
 * @property JawabanKuesioner[] $jawabanKuesioners
 * @property KandidatPolling[] $kandidatPollings
 * @property Prodi $idProdi
 * @property Post[] $posts
 * @property RequestThread[] $requestThreads
 * @property Thread[] $threads
 * @property Voter[] $voters
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prodi', 'created_by', 'updated_by', 'deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['alamat', 'bio', 'nama_cantik'], 'string', 'max' => 255],
            [['username'], 'string', 'max' => 64],
            [['id_prodi'], 'exist', 'skipOnError' => true, 'targetClass' => Prodi::className(), 'targetAttribute' => ['id_prodi' => 'id_prodi']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_mahasiswa' => 'Id mahasiswa',
            'id_prodi' => 'Id Prodi',
            'alamat' => 'Alamat',
            'bio' => 'Bio',
            'nama_cantik' => 'Nama Cantik',
            'username' => 'Username',
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
    public function getHasilKuis()
    {
        return $this->hasMany(HasilKuis::className(), ['id_mahasiswa' => 'id_mahasiswa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHasilPollings()
    {
        return $this->hasMany(HasilPolling::className(), ['id_mahasiswa' => 'id_mahasiswa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJawabanKuesioners()
    {
        return $this->hasMany(JawabanKuesioner::className(), ['id_mahasiswa' => 'id_mahasiswa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKandidatPollings()
    {
        return $this->hasMany(KandidatPolling::className(), ['id_mahasiswa' => 'id_mahasiswa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProdi()
    {
        return $this->hasOne(Prodi::className(), ['id_prodi' => 'id_prodi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['id_mahasiswa' => 'id_mahasiswa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequestThreads()
    {
        return $this->hasMany(RequestThread::className(), ['id_mahasiswa' => 'id_mahasiswa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThreads()
    {
        return $this->hasMany(Thread::className(), ['id_mahasiswa' => 'id_mahasiswa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVoters()
    {
        return $this->hasMany(Voter::className(), ['id_mahasiswa' => 'id_mahasiswa']);
    }
}
