<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_antrian_now".
 *
 * @property int $id_antrian_now
 * @property string $tgl_antrian
 * @property int $locket_pendaftaran
 * @property int $poli_umum
 * @property int $poli_gigi
 * @property int $poli_tb_kista
 * @property int $poli_kandungan
 * @property int $poli_kb
 * @property int $poli_mtbs
 * @property int $poli_jiwa
 * @property int $poli_lansis
 * @property int $imunisasi
 * @property int $laboratorium
 * @property int $pojok_gizi
 * @property int $klinik_senitasi
 */
class TbAntrianNow extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_antrian_now';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_antrian', 'locket_pendaftaran', 'poli_umum', 'poli_gigi', 'poli_tb_kista', 'poli_kandungan', 'poli_kb', 'poli_mtbs', 'poli_jiwa', 'poli_lansis', 'imunisasi', 'laboratorium', 'pojok_gizi', 'klinik_senitasi'], 'required'],
            [['tgl_antrian'], 'safe'],
            [['locket_pendaftaran', 'poli_umum', 'poli_gigi', 'poli_tb_kista', 'poli_kandungan', 'poli_kb', 'poli_mtbs', 'poli_jiwa', 'poli_lansis', 'imunisasi', 'laboratorium', 'pojok_gizi', 'klinik_senitasi'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_antrian_now' => 'Id Antrian Now',
            'tgl_antrian' => 'Tgl Antrian',
            'locket_pendaftaran' => 'Locket Pendaftaran',
            'poli_umum' => 'Poli Umum',
            'poli_gigi' => 'Poli Gigi',
            'poli_tb_kista' => 'Poli Tb Kista',
            'poli_kandungan' => 'Poli Kandungan',
            'poli_kb' => 'Poli Kb',
            'poli_mtbs' => 'Poli Mtbs',
            'poli_jiwa' => 'Poli Jiwa',
            'poli_lansis' => 'Poli Lansis',
            'imunisasi' => 'Imunisasi',
            'laboratorium' => 'Laboratorium',
            'pojok_gizi' => 'Pojok Gizi',
            'klinik_senitasi' => 'Klinik Senitasi',
        ];
    }
}
