<?php 

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

 ?>
 <h1 class="text-center">Update Product </h1>
 <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
 <?= $form->field($model,'name') ?>

 <?= $form->field($model,'description') ?>

 <?= $form->field($model,'stock') ?>

 <?= $form->field($model,'price') ?>

 <?= Html::submitButton('Update',['class' => 'btn btn-primary center-block']) ?>
 <?php ActiveForm::end(); ?>