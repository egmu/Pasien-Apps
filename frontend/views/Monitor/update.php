<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Monitor */

$this->title = 'Update Monitor: ' . $model->id_antrian_now;
$this->params['breadcrumbs'][] = ['label' => 'Monitors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_antrian_now, 'url' => ['view', 'id' => $model->id_antrian_now]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="monitor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
