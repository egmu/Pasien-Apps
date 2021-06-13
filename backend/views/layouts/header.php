<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top-responsive" role="navigation" style="background-color: #53aaf6;box-shadow: 2px 2px 4px #0000001f; ">
      <!--  <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li> -->
        <!-- <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <i class="fas fa-bars"></i></a>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?=\yii\helpers\Url::home()?>" class="nav-link">Home</a>
        </li>
        

        <div class="navbar-custom-menu" style="display: flex;">

            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                        
                        <span class="hidden-xs" style="text-decoration-color: black; margin-left: 10px;"><img class="user-image" alt="User Image" src="../../backend/web/image/user.png"></span>
                    </a>
                    <ul class="dropdown-menu">
                      
                        <li class="user-footer">
                            <p>
                                
                                
                            </p>
                            <div class="pull-left">
                                <small><?php echo 'Waktu   : ' . date('d-m-Y H:i:s'); ?></small>
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li> -->

                <!-- User Account: style can be found in dropdown.less -->
                
            </ul>
        </div>
    </nav>
</header>
