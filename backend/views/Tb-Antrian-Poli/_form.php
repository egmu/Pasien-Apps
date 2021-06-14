<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TbAntrianLocket */
/* @var $form yii\widgets\ActiveForm */
$poli =  \common\models\TbPoli::find()->all();
$status = [
    [
        'status' => 'Belum',
        'id' => 0
    ],
    [
        'status' => 'Sudah',
        'id' => 1
    ]
];
?>
<div class="tb-antrian-poli-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'urutan')->textInput() ?>

    <?= $form->field($model, 'tgl_antrian')->textInput(['type' => 'date']) ?>


    <?= $form->field($model, 'perkiraan_waktu')->textInput() ?>

    <?= $form->field($model, 'no_rm')->textInput() ?>

    <?= $form->field($model, 'poli_tujuan')->dropDownList([ArrayHelper::map($poli, 'nama_poli', 'nama_poli')]) ?>

    <?= $form->field($model, 'status_antrian')->dropDownList([ArrayHelper::map($status, 'id', 'status')]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
