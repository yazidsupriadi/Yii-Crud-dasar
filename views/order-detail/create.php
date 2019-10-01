<?php 

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

 ?>
 <h1>Create Order Details</h1>
 <?php $form = ActiveForm::begin(); ?>
 <?= $form->field($model,'orders_id') ?>

 <?= $form->field($model,'products_id') ?>
<?= $form->field($model,'quantity_order') ?>

 <?= $form->field($model,'price_each') ?>

 <?= Html::submitButton('simpan',['class' => 'btn btn-primary']) ?>

 <?php ActiveForm::end(); ?>
