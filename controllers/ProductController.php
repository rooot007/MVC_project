<?php
include_once __DIR__ . '/../models/Product.php';

class ProductController
{

	public function actionView($id)
	{
		$settings = Setting::getInfoSettings();

		$categories = array();
		$categories = Category::getCategoriesList();
		$product = Product::getProductByID($id);

		$image = json_decode($product['image']);
		$image_0 = array_shift($image);
		// $product['image'] = explode("|", $str_image);

		require_once(__DIR__. '/../views/product/view.php');

		return true;
	}
	
	public function actionList()
	{
		echo 'NewsController action ActionList';
		return true;
	}
}