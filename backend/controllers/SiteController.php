<?php

namespace backend\controllers;

use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use common\models\TbAdmin;
use common\models\TbPoli;
use common\models\TbPasien;
use common\models\TbAntrianNow;
use common\models\User;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $now = TbAntrianNow::find();
        $pages = new \yii\data\Pagination([
            'totalCount' => $now->count(),
            'pageSize' => 4
        ]);
        // $dataNow = $now->offset($pages->offset)->limit($pages->limit)->orderBy(['locket_pendaftaran' => SORT_DESC])->all();
        
        $Poli = TbPoli::find()->count();
          $Pasien = TbPasien::find()->count();
           $Admin = TbAdmin::find()->count(); 
           $Admin2 = User::find()->count();

        return $this->render('index', [
            'Poli' => $Poli,
            'Pasien' => $Pasien,
            'Admin' => $Admin,
            'Admin2' => $Admin2,
            // 'dataNow' => $now,
            


            
        ]);
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
