<?php
use yii\helpers\Url;

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */

$this->title = 'Dashboard';
?>
<div class="site-index">

 <style type="text/css">
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
    </style>
    
<div class="site-index text-capitalize">
       
        <div class="row justify-content-center">
     
            <div class="col-md-3 mb-3 m-2 shadow" style="height: 200px;border-radius: 100px">
                <div class="row">
                    <div class="col-md-5 bg-green align-self-center text-white rounded p-4">
                        <i class="fa fa-file fa-4x" style="height: 170px"></i>
                    </div>
                    
                    <a href="<?= Url::to(['/mobil'])?>">
                        <div class="col-md-7" style="color: black;">
                            <h2>Poli</h2>
                            <h5><?= $Poli ?></h5>
                        </div>
                    </a>
                </div>
            </div>
             <div class="col-md-3 mb-3 m-2 shadow" style="border-radius: 100px; box-shadow:100px">
                <div class="row">
                    
                    <div class="col-md-5 bg-red align-self-center text-white rounded p-4">
                        <i class="fas fa-users fa-4x"style="height: 170px"></i>
                    </div>
                    
                    <a href="<?= Url::to(['/driver'])?>">
                        <div class="col-md-7" style="color: black;">
                            <h2>Pasien</h2>
                            <h5><?= $Pasien ?></h5>
                        </div>
                    </a>
                
            </div>
            </div>
   
            <div class="col-md-3 mb-3 m-2 shadow" style="border-radius: 100px; box-shadow: 100px; 
  box-shadow:6px 8px 6px 2px rgb(0 0 0 / 30%);">
                <div class="row">
                    <div class="col-md-5 bg-blue align-self-center text-white rounded p-4">
                        <i class="fas fa-street-view fa-4x"style="height: 170px"></i>
                    </div>
    
                    <a href="<?= Url::to(['/penyewa'])?>">
                        <div class="col-md-7" style="color: black;">
                            <h2>Admin</h2>
                            <h5><?= $Admin2 ?></h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
 <div class="col-md-5  m-3 shadow">
            <h3 class="text-center">Antrian</h3>

        <div class="table-responsive table-stripped shadow text-capitalize mt-5 p-3" style="background-color: #6f42c169;">
      
              
            <table class="table">
                <thead>
                    <!--  <th>No</th>
                    <th>Penyewa</th>
                    <th>Tanggal Sewa</th>
                    <th>Jaminan</th> -->
                </thead>
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
    <div class="body-content">

        
            
       


    </div>
</div>
