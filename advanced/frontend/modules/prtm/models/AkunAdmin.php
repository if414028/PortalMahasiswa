<?php

namespace frontend\modules\prtm\models;

use Yii;

/**
 * This is the model class for table "akun_admin".
 *
 * @property integer $akun_id
 * @property string $username
 * @property string $password
 * @property integer $id_role
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted
 *
 * @property Role $idRole
 * @property Galery[] $galeries
 * @property Kuesioner[] $kuesioners
 * @property Kuis[] $kuis
 * @property Pengumuman[] $pengumumen
 * @property Polling[] $pollings
 * @property Post[] $posts
 * @property ProfilAdmin[] $profilAdmins
 * @property RequestThread[] $requestThreads
 * @property Thread[] $threads
 */
class AkunAdmin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'akun_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_role', 'created_by', 'updated_by', 'deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['username'], 'string', 'max' => 12],
            [['password'], 'string', 'max' => 64],
            [['id_role'], 'exist', 'skipOnError' => true, 'targetClass' => Role::className(), 'targetAttribute' => ['id_role' => 'id_role']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'akun_id' => 'Akun ID',
            'username' => 'Username',
            'password' => 'Password',
            'id_role' => 'Id Role',
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
    public function getIdRole()
    {
        return $this->hasOne(Role::className(), ['id_role' => 'id_role']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGaleries()
    {
        return $this->hasMany(Galery::className(), ['id_akun_admin' => 'akun_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKuesioners()
    {
        return $this->hasMany(Kuesioner::className(), ['id_akun_admin' => 'akun_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKuis()
    {
        return $this->hasMany(Kuis::className(), ['id_akun_admin' => 'akun_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengumumen()
    {
        return $this->hasMany(Pengumuman::className(), ['id_akun_admin' => 'akun_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPollings()
    {
        return $this->hasMany(Polling::className(), ['id_akun_admin' => 'akun_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['id_akun_admin' => 'akun_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfilAdmins()
    {
        return $this->hasMany(ProfilAdmin::className(), ['id_akun_admin' => 'akun_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequestThreads()
    {
        return $this->hasMany(RequestThread::className(), ['approved_by' => 'akun_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThreads()
    {
        return $this->hasMany(Thread::className(), ['id_akun_admin' => 'akun_id']);
    }
}
