<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TbAntrianNow */

$this->title = $model->id_antrian_now;
$this->params['breadcrumbs'][] = ['label' => 'Tb Antrian Nows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-antrian-now-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_antrian_now], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_antrian_now], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
    ]) ?>

</div>
