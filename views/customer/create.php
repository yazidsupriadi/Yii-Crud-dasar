<?php 

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

 ?>
 <h1>Create employee</h1>
 <?php $form = ActiveForm::begin(); ?>
 <?= $form->field($model,'firstname') ?>

 <?= $form->field($model,'lastname') ?>
<?= $form->field($model,'phone') ?>

 <?= $form->field($model,'address') ?>

 <?= Html::submitButton('simpan',['class' => 'btn btn-primary']) ?>

 <?php ActiveForm::end(); ?>
