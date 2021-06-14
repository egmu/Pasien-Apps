<?php
use yii\helpers\Url;

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tentang Kami';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">

    <p>Puskesmas <?= Yii::$app->name  ?></p>
<div style="border-width: 10px;">
	<h2>Lokasi: </h2>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505763.25984985544!2d111.24920771177557!3d-7.970457254649394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e790b859cfee851%3A0x3027a76e352bea0!2sKabupaten%20Ponorogo%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623548870856!5m2!1sid!2sid" width="540" height="620" style="border:0;" allowfullscreen="loading" loading="lazy"></iframe>
</div>
<div style="transform: translate(600px, -560px);">
    <h2>Jln: Hasanudin</h2>
    <h2>Kota: Ponorogo</h2><br>
    <table>
    	<tr>Visi</tr>
    	<p> "Menjadi Puskesmas Dengan Pelayanan Prima </p>
    	<p style="transform: translateY(-10px);">Untuk Meningkatkan Derajat Kesehatan Masyarakat"</p>
    </table>
    <table>
    	<tr>Misi</tr>
    	<p>
            1. Meningkatkan kualitas manajemen pelayanan kesehatan</p>
            <p>
            2. Meningkatkan kualitas sarana dan prasarana pelayanan kesehatan
            </p>
            <p>
            3. Meningkatkan Ketrampilan dan Profesinalisme Tenaga Kesehatan
            </p>
    </table>
</div>
