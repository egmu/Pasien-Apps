<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_antrian_locket".
 *
 * @property int $id_antrian_locket
 * @property int $urutan
 * @property string $tgl_antrian
 * @property int $no_rm
 * @property string $poli_tujuan
 * @property string $perkiraan_waktu
 * @property string $status_pasien
 *
 * @property TbPasien $noRm
 * @property TbPoli $poliTujuan
 */
class TbAntrianLocket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_antrian_locket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['urutan', 'tgl_antrian', 'no_rm', 'poli_tujuan', 'perkiraan_waktu', 'status_pasien'], 'required'],
            [['urutan', 'no_rm'], 'integer'],
            [['tgl_antrian', 'perkiraan_waktu'], 'safe'],
            [['poli_tujuan'], 'string', 'max' => 25],
            [['status_pasien'], 'string', 'max' => 20],
            [['urutan'], 'unique'],
            [['poli_tujuan'], 'unique'],
            [['no_rm'], 'exist', 'skipOnError' => true, 'targetClass' => TbPasien::className(), 'targetAttribute' => ['no_rm' => 'no_rm']],
            [['poli_tujuan'], 'exist', 'skipOnError' => true, 'targetClass' => TbPoli::className(), 'targetAttribute' => ['poli_tujuan' => 'nama_poli']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_antrian_locket' => 'Id Antrian Locket',
            'urutan' => 'Urutan',
            'tgl_antrian' => 'Tgl Antrian',
            'no_rm' => 'No Rm',
            'poli_tujuan' => 'Poli Tujuan',
            'perkiraan_waktu' => 'Perkiraan Waktu',
            'status_pasien' => 'Status Pasien',
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

    /**
     * Gets query for [[PoliTujuan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPoliTujuan()
    {
        return $this->hasOne(TbPoli::className(), ['nama_poli' => 'poli_tujuan']);
    }
}
