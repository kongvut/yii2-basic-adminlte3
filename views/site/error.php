<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
$this->params['breadcrumbs'][] = ['label' => "Home", 'url' => '/'];
$this->params['breadcrumbs'][] = ['label' => "Module", 'url' => '/site'];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'active' => true];
?>

<?php $this->beginContent('@app/views/layouts/app.layout.php'); ?>

<div class="site-error">

    <div class="row mb1">
        <div class="col-md-12">
            <h1><?= Html::encode($this->title) ?></h1>

            <div class="alert alert-danger">
                <?= nl2br(Html::encode($message)) ?>
            </div>

            <p>
                The above error occurred while the Web server was processing your request.
            </p>
            <p>
                Please contact us if you think this is a server error. Thank you.
            </p>
        </div>
    </div>

</div>

<?php $this->endContent(); ?>
