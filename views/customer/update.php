<?php 

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

 ?>
 <h1 class="text-center">Update Customer</h1>
 <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
 <?= $form->field($model,'firstname') ?>

 <?= $form->field($model,'lastname') ?>

 <?= $form->field($model,'phone') ?>

 <?= $form->field($model,'address') ?>

 <?= Html::submitButton('Update',['class' => 'btn btn-primary center-block']) ?>
 <?php ActiveForm::end(); ?>