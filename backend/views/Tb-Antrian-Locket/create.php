<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TbAntrianLocket */

$this->title = 'Create Tb Antrian Locket';
$this->params['breadcrumbs'][] = ['label' => 'Tb Antrian Lockets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-antrian-locket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
