<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Admins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-admin-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Admin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_admin',
            'username',
            'password',
            'nama_admin',
            'hak_akses',
            //'last_login',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
