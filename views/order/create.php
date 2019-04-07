<?php 

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

 ?>
 <h1>Create Orders</h1>
 <?php $form = ActiveForm::begin(); ?>
 <?= $form->field($model,'order_date') ?>

 <?= $form->field($model,'customers') ?>
<?= $form->field($model,'phone') ?>

 <?= $form->field($model,'address') ?>

 <?= Html::submitButton('simpan',['class' => 'btn btn-primary']) ?>

 <?php ActiveForm::end(); ?>
