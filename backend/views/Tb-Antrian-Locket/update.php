<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TbAntrianLocket */

$this->title = 'Update Tb Antrian Locket: ' . $model->id_antrian_locket;
$this->params['breadcrumbs'][] = ['label' => 'Tb Antrian Lockets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_antrian_locket, 'url' => ['view', 'id' => $model->id_antrian_locket]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-antrian-locket-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
