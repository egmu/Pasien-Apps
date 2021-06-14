<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "monitor".
 *
 * @property int $id_antrian_now
 * @property string|null $nama
 *
 * @property TbAntrianNow $antrianNow
 */
class Monitor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'monitor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'string', 'max' => 25],
            [['id_antrian_now'], 'exist', 'skipOnError' => true, 'targetClass' => TbAntrianNow::className(), 'targetAttribute' => ['id_antrian_now' => 'id_antrian_now']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_antrian_now' => 'Id Antrian Now',
            'nama' => 'Nama',
        ];
    }

    /**
     * Gets query for [[AntrianNow]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAntrianNow()
    {
        return $this->hasOne(TbAntrianNow::className(), ['id_antrian_now' => 'id_antrian_now']);
    }
}
