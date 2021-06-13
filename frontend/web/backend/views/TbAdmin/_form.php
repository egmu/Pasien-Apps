<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TbAdmin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_admin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hak_akses')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_login')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
