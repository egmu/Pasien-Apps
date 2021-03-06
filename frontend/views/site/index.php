<?php
use yii\helpers\Url;

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */

$this->title = 'Home';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">

        <h1 class="display-4">Puskesmas <?= Yii::$app->name  ?></h1>

        <p class="lead">Selamat datang  </p>
        <p>Kesehatan anda adalah Kebahagiaan Keluarga</p>

        
    </div>
    
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Card Block Perfect Hover #1</title>

    <style>
      /*body {
        margin: 0;
        padding: 0;
        min-height: 100vh;
        background: #212121;
        font-family: "Courier New", Courier, monospace;
        display: flex;
        align-items: center;
        justify-content: center;
      }*/

      img {
        filter: brightness(0) invert(1);
        max-height: 120px;
      }
.responsive {
  width: 100%;
  height: auto;
}
 @media (min-width:356px) {
      .card-columns {
        column-count: 6;
      }
  }

  @media (min-width:576px) {
      .card-columns {
        column-count: 6;
      }
  }
    @media (min-width:768px) {
      .card-columns {
        column-count: 6;
      }
  }
  @media (min-width:992px) {
      .card-columns {
        column-count: 4;
      }
  }
  @media (min-width:1200px) {
      .card-columns {
        column-count: 6;
      }
  }
      .container1 {
        width: 1080px;
        position: relative;
        display: flex;
        justify-content: space-between;
      }

      .container1 .card {
        position: relative;
      }

      .container1 .card .card-content {
        width: 300px;
        height: 280px;
        color: black;
        background-color: #00ae3c;
        transition: 0.4s;
      }

      .container1 .card .card-content.card-header {
        position: relative;
        
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1;
        transform: translateY(140px);
      }

      .container1 .card:hover .card-content.card-header {
        transform: translateY(0);
      }

      .container1 .card.card-style-1:hover .card-content.card-header {
        background: #880e4f;
      }

      .container1 .card.card-style-2:hover .card-content.card-header {
        background: #4a148c;
      }

      .container1 .card.card-style-3:hover .card-content.card-header {
        background: #311b92;
      }

      .container1 .card .card-content.card-header .content {
        opacity: 0.3;
        transition: 0.4s;
      }

      .container1 .card:hover .card-content.card-header .content {
        opacity: 1;
      }

      .container1 .card .card-content.card-header .content h3 {
        margin: 12px 0 0;
        padding: 0;
        color: #fff;
        text-align: center;
        font-size: 20px;
      }

      .container1 .card .card-content.card-body {
        position: relative;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        box-sizing: border-box;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.7);
        transform: translateY(-140px);
      }

      .container1 .card:hover .card-content.card-body {
        transform: translateY(0);
      }

      .container1 .card .card-content.card-body .content p {
        margin: 0;
        padding: 0;
      }

      .container1 .card .card-content.card-body .content a {
        margin: 16px 0 0;
        padding: 6px;
        display: inline-block;
        text-decoration: none;
        font-weight: 900;
      }

      .container1 .card.card-style-1 .card-content.card-body .content a {
        color: #880e4f;
        border: 1px solid #880e4f;
      }

      .container1 .card.card-style-2 .card-content.card-body .content a {
        color: #4a148c;
        border: 1px solid #4a148c;
      }

      .container1 .card.card-style-3 .card-content.card-body .content a {
        color: #311b92;
        border: 1px solid #311b92;
      }

      .container1 .card .card-content.card-body .content a:hover {
        background: #212121;
        color: #fff;
        border: 1px solid #212121;
      }

    </style>
  </head>

  <body>
    
    <div class="container1">
       
      <div class="card card-style-1">
        <div class="card-content card-header">
          <div class="content">
            <img
              src="2416632-internet-of-things/svg/011-smarthome.svg"
              alt=""
            />
            <h3>Visi </h3>
          </div>
        </div>
        <div class="card-content card-body">
          <div class="content">
            <p>
             "Menjadi Puskesmas Dengan Pelayanan Prima Untuk Meningkatkan Derajat Kesehatan Masyarakat"
            </p>
            
          </div>
        </div>
      </div>
      
      
      <div class="card card-style-2">
        <div class="card-content card-header">
          <div class="content" >
            <img src="2416632-internet-of-things/svg/008-cloud.svg" alt="" />
            <h3>Misi</h3>
          </div>
        </div>
        <div class="card-content card-body">
          <div class="content">
            <p>
            1. Meningkatkan kualitas manajemen pelayanan kesehatan</p>
            <p>
            2. Meningkatkan kualitas sarana dan prasarana pelayanan kesehatan
            </p>
            <p>
            3. Meningkatkan Ketrampilan dan Profesinalisme Tenaga Kesehatan
            </p>
            
          </div>
        </div>
      </div>
      <div class="card card-style-3">
        <div class="card-content card-header">
          <div class="content" >
           <img src="2416632-internet-of-things/svg/008-cloud.svg" alt="" />
            <h3>Sejarah</h3></h3>
          </div>
        </div>
        <div class="card-content card-body">
          <div class="content">
             <p>
            Puskesmas Citra Indah berdiri pada tahun 2021, dengan Moto "Keindahan adalah Tubuh Sehat"
            </p>
        </div>
    </div>
            
          </div>
        </div>
      </div>
       
<a href="https://www.qries.com/">
         <img alt="Qries" src="https://www.qries.com/images/banner_logo.png"
         width="150" height="70">
      </a>
    <div class="col-md-5  m-3 shadow" style="position: center">
            <h3 class="text-center">Antrian</h3>

        <div class="table-responsive table-stripped shadow text-capitalize mt-5 p-3" style="background-color: #06ee2ac4;">
      
              
            <table class="table">
               
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dataNow as $item) { ?>
                      
                        <div class="row" style="box-shadow: 0 4px 8px 0 rgb(144, 237, 125);">
                            <tr><?= Html::a($i, $item['id_antrian_now']) ?></tr><br>
                            <tr>Umum: <?= $item['poli_umum'] ?></tr><br>
                            <tr>Kista: <?= $item['poli_tb_kista'] ?></tr><br>
                            <tr>KB: <?= $item['poli_kb'] ?></tr><br>
                            <tr>Pendaftaran: <?= $item['locket_pendaftaran'] ?></tr><br>
                            <tr>Gizi: <?= $item['poli_gigi'] ?></tr><br>
                            <div style="transform: tr">
                              <tr>Mts: <?= $item['poli_mtbs'] ?></tr><br>
                            <tr>Jiwa: <?= $item['poli_jiwa'] ?></tr><br>
                            <tr>Lansis: <?= $item['poli_lansis'] ?></tr><br>
                            <tr>Imunisasi: <?= $item['imunisasi'] ?></tr><br>
                            <tr>Pojok Gizi: <?= $item['pojok_gizi'] ?></tr><br>
                              <tr>Senitasi: <?= $item['klinik_senitasi'] ?>
                            </div>
                              
                              
                            </tr>
                            
                        </div>
                    <?php $i++; ?>
                    <?php }?>
                </tbody>
            </table>
       </div>
    </div>
     <div class="col-md-5  m-4 shadow" style="position: center">
            <h3 class="text-center">Antrian</h3>

        <div class="table-responsive table-stripped shadow text-capitalize mt-5 p-3" style="background-color: #1bc4df69;">
      
              
            <table class="table">
               
                <tbody>
                    
                    <?php foreach ($dataNow1 as $item) { ?>
                      
                        <div class="row" style="box-shadow: 0 4px 8px 0 rgb(144, 237, 125);">
                            <!-- tr><?= Html::a($i, $item['id_poli']) ?></tr><br -->
                            <tr><?= $item['nama_poli'] ?></tr><br>
                           
                            </div>
                              
                              
                            </tr>
                            
                        </div>
                    
                    <?php }?>
                </tbody>
            </table>
       </div>
    </div>

<!--                       <div class="card card-style-3">
                        <div class="card-content card-header">
                          <div class="content">
                            <img src="2416632-internet-of-things/svg/008-cloud.svg" alt="" />
                            <h3>Lokasi</h3> -->
                            <!-- <h3><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505763.25984985544!2d111.24920771177557!3d-7.970457254649394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e790b859cfee851%3A0x3027a76e352bea0!2sKabupaten%20Ponorogo%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623548870856!5m2!1sid!2sid" width="300" height="280" style="border:0;" allowfullscreen="" loading="lazy"></iframe></h3> -->
                         <!--  </div>
                        </div>
                        <div class="card-content card-body">
                          <div class="content">
                             <p>
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505763.25984985544!2d111.24920771177557!3d-7.970457254649394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e790b859cfee851%3A0x3027a76e352bea0!2sKabupaten%20Ponorogo%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623548870856!5m2!1sid!2sid" width="300" height="270" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </p>
                           
                          </div>
                        </div>
                      </div> -->
    </div>

  </body>
</html>
    <div class="body-content">

        

    </div>

</div>
