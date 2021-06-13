<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TbAntrianNow */

$this->title = 'Update Tb Antrian Now: ' . $model->id_antrian_now;
$this->params['breadcrumbs'][] = ['label' => 'Tb Antrian Nows', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_antrian_now, 'url' => ['view', 'id' => $model->id_antrian_now]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-antrian-now-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
