<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TbAntrianNow */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-antrian-now-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl_antrian')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'locket_pendaftaran')->textInput() ?>

    <?= $form->field($model, 'poli_umum')->textInput() ?>

    <?= $form->field($model, 'poli_gigi')->textInput() ?>

    <?= $form->field($model, 'poli_tb_kista')->textInput() ?>

    <?= $form->field($model, 'poli_kandungan')->textInput() ?>

    <?= $form->field($model, 'poli_kb')->textInput() ?>

    <?= $form->field($model, 'poli_mtbs')->textInput() ?>

    <?= $form->field($model, 'poli_jiwa')->textInput() ?>

    <?= $form->field($model, 'poli_lansis')->textInput() ?>

    <?= $form->field($model, 'imunisasi')->textInput() ?>

    <?= $form->field($model, 'laboratorium')->textInput() ?>

    <?= $form->field($model, 'pojok_gizi')->textInput() ?>

    <?= $form->field($model, 'klinik_senitasi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
