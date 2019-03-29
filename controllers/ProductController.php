<?php

namespace app\controllers;
use yii\web\Controller;
use Yii;
use app\models\Products;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$products = Products::find()->all();

    	return $this->render('index',['products'=>$products]);
    }

    public function actionCreate()
    {
        $model = new Products;
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
    	$model = Products::findOne($id);
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
    	$model = Products::findOne($id);
        $model->delete();
		return $this->redirect(['index']);

    }

}
