<?php

class AdminCategoryController extends AdminBase
{

	public function actionIndex()
		{
			self::checkAdmin();

			// get product list
			$categoryList = Category::getCategoriesListAdmin();

			//обработка формы изминения позиции категории
		if (isset($_POST['submit'])) {
			$options['list_category'] = $_POST['category_position'];
			$options['id'] = $_POST['id_category'];
			
			Category::sortCategory($options);
			header('Location: /admin/category');
		}

			//подключаем вид
			require_once(__DIR__ . '/../views/admin_category/index.php');
			return true;
		}

	public function actionCreate()
	{
		self::checkAdmin();

		if (isset($_POST['submit'])) {
			$options['name'] = $_POST['name'];
			$options['status'] = $_POST['status'];

			$errors = false;

			if (!isset($options['name']) || empty($options['name'])) {
				$errors[] = ' Юра не заполнил поля';
			}

			if ($errors == false) {
				$id = Category::createCategory($options);

				header('Location: /admin/category');
			}
		}
		require_once(__DIR__ . '/../views/admin_category/create.php');
		return true;
	}

	public function actionUpdate($id)
	{
		self::checkAdmin();

		$category = Category::getCategoryById($id);

		if (isset($_POST['submit'])) {
			$options['name'] = $_POST['name'];
			$options['status'] = $_POST['status'];

			Category::updateCategoryById($id, $options);

			header('Location: /admin/category');
		}

		require_once(__DIR__ . '/../views/admin_category/update.php');
		return true;
	}

	public function actionDelete($id)
	{
		self::checkAdmin();

		if(isset($_POST['submit'])){
			Category::deleteCategoryById($id);

			header('Location: /admin/category');
		}
		require_once(__DIR__ . '/../views/admin_category/delete.php');
	}	


}