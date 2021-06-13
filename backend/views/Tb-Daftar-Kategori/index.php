<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Daftar Kategoris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-daftar-kategori-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Daftar Kategori', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_daftar_kategori',
            'id_kategori',
            'detail_kategori',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
