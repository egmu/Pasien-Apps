<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Monitor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monitor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_antrian_now')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
