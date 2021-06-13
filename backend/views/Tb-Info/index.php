<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-info-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_info',
            'id_kategori',
            'judul',
            'detail1',
            'detail2',
            //'gambar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
