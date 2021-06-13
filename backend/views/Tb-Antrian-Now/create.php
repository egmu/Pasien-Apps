<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TbAntrianNow */

$this->title = 'Create Tb Antrian Now';
$this->params['breadcrumbs'][] = ['label' => 'Tb Antrian Nows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-antrian-now-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
