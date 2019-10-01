<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

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
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
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
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

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

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionHello()
    {
        return "Hello World";
    }

    public function actionTampil()
    {
        return $this->render('hello');
    }

    public function actionKomentar()
    {
        $model = new \app\models\Komentar;
        // tangkap request post
        if(Yii::$app->request->post()){
            $model->load(Yii::$app->request->post());
            if($model->validate()){
                Yii::$app->session->setFlash('success','Terima kasih atas komentar Anda.');
                return $this->render('hasil-komentar',['model'=>$model]);
            }else{
                Yii::$app->session->setFlash('error','Data yang Anda input salah.');
            }
        }

        return $this->render('komentar',[
            'model'=>$model,
        ]);
    }

    public function actionQuery()
    {
        $db = Yii::$app->db;
        $command = $db->createCommand('SELECT * FROM employee');
        $employees = $command->queryAll();
        // ekstrak data
        foreach($employees as $emp){
            echo $emp['id'].' ';
            echo $emp['name'].' ';
            echo '('.$emp['age'].')';
            echo '<br>';
        }
    }

    public function actionActiveRecord()
    {
        $employees = \app\models\Employee::find()->all();
        // ekstrak data
        foreach($employees as $emp){
            echo $emp->id.' ';
            echo $emp->name.' ';
            echo '('.$emp->age.')';
            echo '<br>';
        }   
    }
}
