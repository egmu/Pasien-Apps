<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TbAdmin */

$this->title = 'Update Tb Admin: ' . $model->id_admin;
$this->params['breadcrumbs'][] = ['label' => 'Tb Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_admin, 'url' => ['view', 'id' => $model->id_admin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
