<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Id Kategoris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="id-kategori-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Id Kategori', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kategori',
            'nama_kategori',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
