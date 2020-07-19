<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = ['label' => "Home", 'url' => '/'];
$this->params['breadcrumbs'][] = ['label' => "Module", 'url' => '/site'];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'active' => true];
?>

<?php $this->beginContent('@app/views/layouts/app.layout.php'); ?>

<div class="site-contact">

    <div class="row mb1">
        <div class="col-md-12">

            <div class="card card-info card-outline">
                <div class="card-header">
                    <h2 class="card-title"><?= Html::encode($this->title) ?></h2>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                        <div class="alert alert-success">
                            Thank you for contacting us. We will respond to you as soon as possible.
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

                        <p>
                            If you have business inquiries or other questions, please fill out the following form to contact us.
                            Thank you.
                        </p>

                        <div class="row">
                            <div class="col-lg-5">

                                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                                <?= $form->field($model, 'email') ?>

                                <?= $form->field($model, 'subject') ?>

                                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                    'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-6">{input}</div></div>',
                                ]) ?>

                                <div class="form-group">
                                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                </div>

                                <?php ActiveForm::end(); ?>

                            </div>
                        </div>

                    <?php endif; ?>

                </div>
                <!-- /.card-body -->
            </div>

        </div>
    </div>

</div>

<?php $this->endContent(); ?>
