<?php
use yii\helpers\Url;

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Polis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-poli-index">

    <h1><?= Html::encode($this->title) ?></h1>

   <!--  <p>
        <?= Html::a('Create Tb Poli', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // 'id_poli',
            'nama_poli',
           

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
