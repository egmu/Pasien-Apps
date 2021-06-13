<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_info_kategori".
 *
 * @property int $id_kategori
 * @property string $nama_kategori
 *
 * @property TbInfo[] $tbInfos
 */
class TbInfoKategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_info_kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kategori'], 'required'],
            [['nama_kategori'], 'string', 'max' => 50],
            [['nama_kategori'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'Id Kategori',
            'nama_kategori' => 'Nama Kategori',
        ];
    }

    /**
     * Gets query for [[TbInfos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbInfos()
    {
        return $this->hasMany(TbInfo::className(), ['id_kategori' => 'id_kategori']);
    }
}
