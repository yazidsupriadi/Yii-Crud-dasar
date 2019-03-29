<?php 

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

 ?>
 <h1>Create Orders</h1>
 <?php $form = ActiveForm::begin(); ?>
 <?= $form->field($model,'order_date') ?>

 <?= $form->field($model,'customers_id') ?>
 <?= Html::submitButton('simpan',['class' => 'btn btn-primary']) ?>

 <?php ActiveForm::end(); ?>
