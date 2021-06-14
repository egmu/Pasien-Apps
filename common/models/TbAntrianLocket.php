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
 * @property string $perkiraan_waktu
 * @property string $status_pasien
 * @property int $poli_id
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
            [['urutan', 'tgl_antrian', 'no_rm', 'perkiraan_waktu', 'status_pasien', 'poli_id'], 'required'],
            [['urutan', 'no_rm', 'poli_id'], 'integer'],
            [['tgl_antrian', 'perkiraan_waktu'], 'safe'],
            [['status_pasien'], 'string', 'max' => 20],
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
            'perkiraan_waktu' => 'Perkiraan Waktu',
            'status_pasien' => 'Status Pasien',
            'poli_id' => 'Poli ID',
        ];
    }
}
