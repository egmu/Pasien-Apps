<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TbAntrianLocket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-antrian-locket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'urutan')->textInput() ?>

    <?= $form->field($model, 'tgl_antrian')->textInput() ?>

    <?= $form->field($model, 'no_rm')->textInput() ?>

    <?= $form->field($model, 'poli_tujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perkiraan_waktu')->textInput() ?>

    <?= $form->field($model, 'status_pasien')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
