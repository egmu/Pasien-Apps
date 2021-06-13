<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Antrian Lockets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-antrian-locket-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Antrian Locket', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_antrian_locket',
            'urutan',
            'tgl_antrian',
            'no_rm',
            'poli_tujuan',
            //'perkiraan_waktu',
            //'status_pasien',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
