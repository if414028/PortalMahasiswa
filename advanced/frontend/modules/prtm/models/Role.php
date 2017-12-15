<?php

namespace frontend\modules\prtm\models;

use Yii;

/**
 * This is the model class for table "role".
 *
 * @property integer $id_role
 * @property string $nama_role
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted
 *
 * @property AkunAdmin[] $akunAdmins
 */
class Role extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'deleted'], 'integer'],
            [['nama_role'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_role' => 'Id Role',
            'nama_role' => 'Nama Role',
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
    public function getAkunAdmins()
    {
        return $this->hasMany(AkunAdmin::className(), ['id_role' => 'id_role']);
    }
}
