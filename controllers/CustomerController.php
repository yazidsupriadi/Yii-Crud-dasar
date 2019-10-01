<?php

namespace app\controllers;
use yii\web\Controller;
use Yii;
use app\models\Customers;


class CustomerController extends Controller
{
    public function actionIndex()
    {
   
    	$customers = Customers::find()->all();

    	return $this->render('index',['customers'=>$customers]);
    }

    public function actionCreate()
    {
        $model = new Customers;
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

    public function actionUpdate($id)
    {
    	$model = Customers::findOne($id);
        if(Yii::$app->request->post()){
        	$model->load(Yii::$app->request->post());
        	if ($model->save()) {
        		Yii::$app->session->setFlash('success','Data berhasil disimpan');
        		
        	}else {
        		Yii::$app->session->setFlash('error','Data gagal disimpan');
        		
        	}
        	return $this->redirect(['index']);
        

        }else {
        	return $this->render('update',['model'=>$model,]);
        }
    	
    }
    public function actionDelete($id)
    {
    	$model = Customers::findOne($id);
        $model->delete();
		return $this->redirect(['index']);

    }

}
