<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Antrian Nows';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-antrian-now-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Antrian Now', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_antrian_now',
            'tgl_antrian',
            'locket_pendaftaran',
            'poli_umum',
            'poli_gigi',
            //'poli_tb_kista',
            //'poli_kandungan',
            //'poli_kb',
            //'poli_mtbs',
            //'poli_jiwa',
            //'poli_lansis',
            //'imunisasi',
            //'laboratorium',
            //'pojok_gizi',
            //'klinik_senitasi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
