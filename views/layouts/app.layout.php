<?php

/* @var $this \yii\web\View */
/* @var $content string */
?>

<?php $this->beginBlock('header'); ?>
    <?= $this->renderFile('@app/views/layouts/header.php') ?>
<?php $this->endBlock(); ?>

<?php $this->beginBlock('left_menu'); ?>
    <?= $this->renderFile('@app/views/layouts/menu.php') ?>
<?php $this->endBlock(); ?>

<?= $content ?>
