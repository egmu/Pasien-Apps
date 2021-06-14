<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dftar Antrian';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-antrian-now-index">

   

   <div class="table-responsive">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
           
            'id_antrian_now',
            'tgl_antrian',
            'locket_pendaftaran',
            'poli_umum',
            'poli_gigi',
            'poli_tb_kista',
            'poli_kandungan',
            'poli_kb',
            'poli_mtbs',
            'poli_jiwa',
            'poli_lansis',
            'imunisasi',
            'laboratorium',
            'pojok_gizi',
            'klinik_senitasi',

           
        ],
    ]); ?></div>


</div>
