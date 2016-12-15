<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
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

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
            ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

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

    public function actionApropos()
    {
        return $this->render('apropos');
    }

    public function actionExpertises()
    {
        return $this->render('expertises');
    }

    public function actionSolutions()
    {
        return $this->render('solutions');
    }

    public function actionEtudeanalyse()
    {
        return $this->render('etudeanalyse');
    }

    public function actionPartener()
    {
        return $this->render('partener');
    }

    public function actionTechnologies()
    {
        return $this->render('technologies');
    }

    public function actionMaghribup()
    {
        return $this->render('maghribup');
    }

    public function actionAngsite()
    {
        return $this->render('angsite');
    }

    public function actionPmestarter()
    {
        return $this->render('pmestarter');
    }

    public function actionSmsdaba()
    {
        return $this->render('smsdaba');
    }

    public function actionMaronethelp()
    {
        return $this->render('maronethelp');
    }

    public function actionNasna()
    {
        return $this->render('nasna');
    }

    public function actionNumerini()
    {
        return $this->render('numerini');
    }

    public function actionFormations()
    {
        return $this->render('formations');
    }

    public function actionReferences()
    {
        return $this->render('references');
    }

    public function actionArticles()
    {
        return $this->render('articles');
    }

    public function actionEngagements()
    {
        return $this->render('engagements');
    }

     public function actionDg()
    {
        return $this->render('dg');
    }

     public function actionLogos()
    {
        return $this->render('logos');
    }

   /**
     * Ajax handler for language change dropdown list. Sets cookie ready for next request
     */
   public function actionLanguage()
   {
    if ( Yii::$app->request->post('_lang') !== NULL && array_key_exists(Yii::$app->request->post('_lang'), Yii::$app->params['languages']))
    {
        Yii::$app->language = Yii::$app->request->post('_lang');
        $cookie = new yii\web\Cookie([
            'name' => '_lang',
            'value' => Yii::$app->request->post('_lang'),
            ]);
        Yii::$app->getResponse()->getCookies()->add($cookie);
    }
    Yii::$app->end();
}
}
