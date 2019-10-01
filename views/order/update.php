<?php 

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

 ?>
 <h1 class="text-center">Update Orders</h1>
 <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
 <?= $form->field($model,'order_date') ?>

 <?= $form->field($model,'customers_id') ?>

 <?= Html::submitButton('Update',['class' => 'btn btn-primary center-block']) ?>
 <?php ActiveForm::end(); ?>