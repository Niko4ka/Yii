<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Products;
use yii\data\Pagination;

class ProductsController extends Controller
{
	public function actionIndex()
	{

		$query = Products::find()
			->where(['status' => 1]);

		$pagination = new Pagination([
			'totalCount' => $query->count(),
			'defaultPageSize' => 6,
			]);

		$products = $query->orderBy('title')
			 ->offset($pagination->offset)
			 ->limit($pagination->limit)
			 ->all();

		

		// $product = Products::findOne(4);
		// $product->price = "1000.00";
		// $product->status = 0;
		// $product->save();
		// var_dump($products);
		return $this->render('index', [
			'products' => $products,
			'pagination' => $pagination
		]);


	}
	
	
}