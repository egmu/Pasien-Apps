<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_antrian_poli".
 *
 * @property int $id_antrian_poli
 * @property int $urutan
 * @property string $tgl_antrian
 * @property string $perkiraan_waktu
 * @property int $no_rm
 * @property string|null $poli_tujuan
 * @property string $status_antrian
 *
 * @property TbPasien $noRm
 */
class TbAntrianPoli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_antrian_poli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['urutan', 'tgl_antrian', 'perkiraan_waktu', 'no_rm', 'status_antrian'], 'required'],
            [['urutan', 'no_rm'], 'integer'],
            [['tgl_antrian', 'perkiraan_waktu', 'poli_tujuan'], 'safe'],
            [['status_antrian'], 'string', 'max' => 20],
            [['no_rm'], 'exist', 'skipOnError' => true, 'targetClass' => TbPasien::className(), 'targetAttribute' => ['no_rm' => 'no_rm']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_antrian_poli' => 'Id Antrian Poli',
            'urutan' => 'Urutan',
            'tgl_antrian' => 'Tgl Antrian',
            'perkiraan_waktu' => 'Perkiraan Waktu',
            'no_rm' => 'No Rm',
            'poli_tujuan' => 'Poli Tujuan',
            'status_antrian' => 'Status Antrian',
        ];
    }

    /**
     * Gets query for [[NoRm]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRm()
    {
        return $this->hasOne(TbPasien::className(), ['no_rm' => 'no_rm']);
    }
}
