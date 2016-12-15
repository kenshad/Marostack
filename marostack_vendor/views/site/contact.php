<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Formulaire de contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact" style="background-image: url('imgs/contact-bg.jpg'); background-size:100% auto; background-repeat: no-repeat;">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Merci de nous contacter. Nous vous répondrons dès que possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>


        <div class="row">
            <div class="col-md-12 col-xs-12">
                <p class="lead">
                    Si vous souhaitez avoir nos services, poser des questions ou si vous avez des suggestions sur l'entreprise et ses produits, vous etes inviter a remplir le formulaire ci-dessous pour nous contacter.
                    Nous sommes toujours à votre écoute et nous vous répondrons le plus rapidement possible.<br />
                <div class="text-primary lead" >
                    Email : contact@marostack.com<br />
                    Fixe : +212 5 22 51 37 73
                </div>
                </p>
            </div>
            <div class="col-md-6 col-xs-12">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name') ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>

                <?=
                $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-9">{input}</div></div>',
                ])
                ?>

                <div class="form-group">
                    <?= Html::submitButton('Envoyer', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
            <div class="col-md-6" id="draggable">

            </div>
        </div>

    <?php endif; ?>
</div>

