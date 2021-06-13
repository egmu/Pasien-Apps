<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TbAntrianLocket */

$this->title = $model->id_antrian_locket;
$this->params['breadcrumbs'][] = ['label' => 'Tb Antrian Lockets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-antrian-locket-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_antrian_locket], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_antrian_locket], [
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
            'id_antrian_locket',
            'urutan',
            'tgl_antrian',
            'no_rm',
            'poli_tujuan',
            'perkiraan_waktu',
            'status_pasien',
        ],
    ]) ?>

</div>