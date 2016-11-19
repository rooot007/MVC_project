<?php

class CatalogController
{
	
	// public function actionCategory($categoryId, $page=1)
	// {
	// 	echo 'Category: ' .$categoryId;
	// 	echo '<br>Page: ' . $page;

	// 	$categories = array();
	// 	$categories = Category::getCategoriesList();

	// 	$categoryProducts = array();
	// 	$categoryProducts = Product::getProductsListByCategory($categoryId, $page);

	// 	require_once(__DIR__ . '/../views/catalog/category.php');
	// 	return true;
	// }

	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoriesList();


		$latestProducts = array();
		$latestProducts = Product::getLatestProduct(10);

		require_once __DIR__ . '/../views/catalog/index.php';
		return true;
	}
	public function actionCategory($categoryId, $page = 1)
	{
		$settings = Setting::getInfoSettings();
		
		$categories = array();
		$categories = Category::getCategoriesList();

		$categoryProducts = array();
		$categoryProducts = Product::getProductsListByCategory($categoryId, $page);

		$total = Product::getTotalProductsInCategory($categoryId);

		// $pagination = new Pagination($total, $page, Product::PRODUCT_ON_PAGE, 'page-');

		require_once (__DIR__ . '/../views/catalog/category.php');

		return true;
	}
}