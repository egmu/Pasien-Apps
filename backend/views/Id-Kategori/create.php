<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\IdKategori */

$this->title = 'Create Id Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Id Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="id-kategori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
