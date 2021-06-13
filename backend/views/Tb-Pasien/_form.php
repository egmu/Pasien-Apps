<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TbPasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hub_keluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_bpjs')->textInput() ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'umur')->textInput() ?>

    <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_index')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_pernikahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telepon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_masuk')->textInput() ?>

    <?= $form->field($model, 'tgl_akhir')->textInput() ?>

    <?= $form->field($model, 'token')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
