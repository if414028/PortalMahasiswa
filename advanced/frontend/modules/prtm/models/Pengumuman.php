<?php

namespace frontend\modules\prtm\models;

use Yii;

/**
 * This is the model class for table "pengumuman".
 *
 * @property integer $pengumuman_id
 * @property string $judul
 * @property integer $id_kategori_pengumuman
 * @property string $konten
 * @property string $file
 * @property integer $id_akun_admin
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted
 *
 * @property KategoriPengumuman $idKategoriPengumuman
 * @property AkunAdmin $idAkunAdmin
 */
class Pengumuman extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pengumuman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kategori_pengumuman', 'id_akun_admin', 'status', 'created_by', 'updated_by', 'deleted'], 'integer'],
            [['konten'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['judul'], 'string', 'max' => 128],
            [['file'], 'file', 'extensions' => 'png, jpg'],
            [['id_kategori_pengumuman'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPengumuman::className(), 'targetAttribute' => ['id_kategori_pengumuman' => 'id_kategori_pengumuman']],
            [['id_akun_admin'], 'exist', 'skipOnError' => true, 'targetClass' => AkunAdmin::className(), 'targetAttribute' => ['id_akun_admin' => 'akun_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pengumuman_id' => 'pengumuman ID',
            'judul' => 'Judul pengumuman *',
            'id_kategori_pengumuman' => 'Id Kategori pengumuman',
            'konten' => 'Deskripsi *',
            'file' => 'File Terlampir',
            'id_akun_admin' => 'Id Akun Admin',
            'status' => 'Status',
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
    public function getIdKategoriPengumuman()
    {
        return $this->hasOne(KategoriPengumuman::className(), ['id_kategori_pengumuman' => 'id_kategori_pengumuman']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAkunAdmin()
    {
        return $this->hasOne(AkunAdmin::className(), ['akun_id' => 'id_akun_admin']);
    }


}
