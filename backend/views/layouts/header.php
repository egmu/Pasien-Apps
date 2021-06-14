<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header" style="height: 10px">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top-responsive" role="navigation" style="background-color: #53aaf6;box-shadow: 2px 2px 4px #0000001f; ">
       <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->       
        
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                
                <span class="d-none d-md-inline"><?= Yii::$app->user->identity->username ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                
        <li class="user-footer" style="margin-top: 10px 0">
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
    </nav>
</header>
