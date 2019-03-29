<?php

namespace app\controllers;
use yii\web\Controller;
use Yii;
use app\models\OrderDetails;

class OrderDetailController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new OrderDetails;
        if(Yii::$app->request->post()){
        	$model->load(Yii::$app->request->post());
        	if ($model->save()) {
        		Yii::$app->session->setFlash('success','Data berhasil disimpan');
        		
        	}else {
        		Yii::$app->session->setFlash('error','Data gagal disimpan');
        		
        	}
        	return $this->redirect(['index']);
        

        }else {
        	return $this->render('create',['model'=>$model,]);
        }
    }
    public function actionIndex()
    {
    	$order_details = OrderDetails::find()->all();

    	return $this->render('index',['order_details'=>$order_details]);
    }
}

