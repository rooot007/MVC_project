<?php
class AdminProductController extends AdminBase
{
	public function actionIndex()
	{
		self::checkAdmin();

		// get product list
		$productsList = Product::getProductsList();
		
		$categoriesList = Category::getCategoriesListAdmin();
		if (isset($_POST['submit'])) {
		$productsList_in_category = Product::getProductsListByCategory($_POST['category_id'], $page = 1);
		}
		//обработка формы изминения позиции поста в категориях
		if (isset($_POST['listInCategory']))
		{
			$options['code'] = $_POST['code'];
			$options['id'] = $_POST['id_item'];

			Product::sortProductInCategory($options);
		}
		//обработка формы изминения позиции поста
		if (isset($_POST['list']) && $_POST['list'] == "Ok")
		{
			$options['list'] = $_POST['list_item'];
			$options['id'] = $_POST['id_item'];

			Product::sortProduct($options);
		}

		//обработка формы отображения поста на главной странице
		if (isset($_POST['main_list']))
		{
			$options['availablity'] = $_POST['main_status'];
			$options['id'] = $_POST['id_item'];

			Product::MainStatusProduct($options);
		}
		//изминение позиции поста по технологии Ajax
		if(isset($_POST['position']) && !empty($_POST))
		{
			$options['code'] = $_POST['position'];
			$options['id'] = $_POST['id'];
			Product::sortProductInCategory($options);
			$productsList_in_category = Product::getProductsListOfCategory($_POST['id_category_of_item'], $page = 1);
			return $productsList_in_category;
		}
		//подключаем вид
		require_once(__DIR__ . '/../views/admin_product/index.php');
		return true;
	}

	public function actionCreate()
	{

		self::checkAdmin();

		//get list category
		$categoriesList = Category::getCategoriesListAdmin();

		//обработка формы
		if (isset($_POST['submit']))
		{
			$options['name'] = $_POST['name'];
			$options['category_id'] = $_POST['category_id'];
			$options['short_description'] = $_POST['short_description'];
			$options['description'] = htmlspecialchars($_POST['description']);
			$options['status'] = $_POST['status'];
			$options['price'] = $_POST['price'];

			$errors = false;

			function save_image($img)
			{
				$str = $_FILES[$img]["tmp_name"];
				$str1 = substr($str, 5);
				// залить в нужную папку
				move_uploaded_file($_FILES[$img]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/img/{$str1}.jpg");
				return $str1;
			}

			//валидация значений
			if (!isset($options['name']) || empty($options['name']))
			{
				$errors[] = 'Поля не заполнены.';
			}

			if ($errors == false) {
					$array_image = [];
					//проверка загрузки изображения
					if (is_uploaded_file($_FILES["image1"]["tmp_name"]))
					{
						//дергаем tmp_name
							
							$array_image[] = save_image("image1");
					}
					if (is_uploaded_file($_FILES["image2"]["tmp_name"]))
					{
							//дергаем tmp_name
							$array_image[] = save_image("image2");
					}
					if (is_uploaded_file($_FILES["image3"]["tmp_name"]))
					{
							//дергаем tmp_name
							$array_image[] = save_image("image3");
					}	
					if (is_uploaded_file($_FILES["image4"]["tmp_name"]))
					{
							//дергаем tmp_name
							$array_image[] = save_image("image4");
					}		
					$options['image'] = json_encode($array_image);
					Product::createProduct($options);

				header('Location: /admin/product');
			}
		}

		require_once(__DIR__. '/../views/admin_product/create.php');
		return true;

	}

	public function actionUpdate($id)
	{
		self::checkAdmin();

		$categoriesList = Category::getCategoriesListAdmin();
		$product = Product::getProductByID($id);
		$images = json_decode($product['image']);

		//get content about defenid item
		$product = Product::getProductById($id);

		function save_image($img){
				$str = $_FILES[$img]["tmp_name"];
				$str1 = substr($str, 5);
				// залить в нужную папку
				move_uploaded_file($_FILES[$img]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/img/{$str1}.jpg");
				return $str1;
			}

		if (isset($_POST['submit1']))
		{
		 	$options['name'] = $_POST['name'];
			$options['category_id'] = $_POST['category_id'];
			$options['short_description'] = $_POST['short_description'];
			$options['description'] = $_POST['description'];
			$options['price'] = $_POST['price'];
			$options['status'] = $_POST['status'];

					if (is_uploaded_file($_FILES["image1"]["tmp_name"]))
					{
						//дергаем tmp_name
							
							$images[] = save_image("image1");
					}
					if (is_uploaded_file($_FILES["image2"]["tmp_name"]))
					{
							//дергаем tmp_name
							$images[] = save_image("image2");
					}
					if (is_uploaded_file($_FILES["image3"]["tmp_name"]))
					{
							//дергаем tmp_name
							$images[] = save_image("image3");
					}	
					if (is_uploaded_file($_FILES["image4"]["tmp_name"]))
					{
							//дергаем tmp_name
							$images[] = save_image("image4");
					}

					$options['image'] = json_encode($images);
			
			//save changes
			if (Product::updateProductById($id, $options))
			{
				// echo '<pre>';
				// print_r($_FILES['image']);
				// echo '</pre>';

				// if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
				// 		// залить в нужную папку
				// 		move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/img/{$id}.jpg");
				// }
			}
			$redicet = $_SERVER['REQUEST_URI'];
			header("Location: $redicet");
		 } 
		 require_once(__DIR__. '/../views/admin_product/update.php');
		return true;
	}
	public function actionDelete($id)
	{
		self::checkAdmin();

		//forms processing
		if (isset($_POST['submit']))
		{
			//if form sended delete item
			Product::deleteProductById($id);
			//редиректим пользователя на страницу управлениями товара
			header("Location: /admin/product");
		}

		require_once(__DIR__. '/../views/admin_product/delete.php');
	}
}