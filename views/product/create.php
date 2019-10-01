<?php 

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

 ?>
 <h1>Create Product List</h1>
 <?php $form = ActiveForm::begin(); ?>
 <?= $form->field($model,'name') ?>

 <?= $form->field($model,'description') ?>
<?= $form->field($model,'stock') ?>

 <?= $form->field($model,'price') ?>

 <?= Html::submitButton('simpan',['class' => 'btn btn-primary']) ?>

 <?php ActiveForm::end(); ?>
