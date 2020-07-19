<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = ['label' => "Home", 'url' => '/'];
$this->params['breadcrumbs'][] = ['label' => "Module", 'url' => '/site'];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'active' => true];
?>

<?php $this->beginContent('@app/views/layouts/app.layout.php'); ?>

<div class="card">

    <div class="card-header">
        <?= Html::encode($this->title) ?>
    </div>

    <div class="card-body">
        <p>
            This is the About page. You may modify the following file to customize its content:
        </p>

        <code><?= __FILE__ ?></code>
    </div>
</div>

<?php $this->endContent(); ?>
