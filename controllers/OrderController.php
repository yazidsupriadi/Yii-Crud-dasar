<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\models\Orders;

class OrderController extends \yii\web\Controller
{

	public function actionCreate()
	{
		$model = new Orders;
		if (Yii::$app->request->post()) {
			$model->load(Yii::$app->request->post());
			if ($model->save()) {
				Yii::$app->session->setFlash('success', 'Data berhasil disimpan');
			} else {
				Yii::$app->session->setFlash('error', 'Data gagal disimpan');
			}
			return $this->redirect(['index']);
		} else {
			return $this->render('create', ['model' => $model,]);
		}
	}
	public function actionIndex()
	{
		$orders = Orders::find()->all();

		return $this->render('index', ['orders' => $orders]);
	}
	public function actionUpdate($id)
	{
		$model = Orders::findOne($id);
		if (Yii::$app->request->post()) {
			$model->load(Yii::$app->request->post());
			if ($model->save()) {
				Yii::$app->session->setFlash('success', 'Data Berhasil Disimpan');
			} else {
				Yii::$app->session->setFlash('error', 'Data gagal disimpan');
			}
			return $this->redirect(['index']);
		} else {
			return $this->render('update', ['model' => $model,]);
		}
	}
	public function actionDelete($id)
	{
		$model = Orders::findOne($id);
		$model->delete();
		return $this->redirect(['index']);
	}
}
