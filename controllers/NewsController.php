<?php
include_once __DIR__. '/../models/News.php';

class NewsController
{
	
	public function actionIndex()
	{
		$newsList = array();
		$newsList = News::getNewsList();

		require_once (__DIR__. '/../views/news/index.php');

		return true;
	}
	public function actionView($id)
	{
		// echo '<br>'. $category. '  hihi';
		// echo '<br>'. $id;
		if($id) {
			$newsItem = News::getNewsItemById($id);

			echo '<pre>';
			print_r($newsItem);
			echo '</pre>';

			echo 'actionView';

			return true;
		}
	}
}