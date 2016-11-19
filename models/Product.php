<?php
/**
* 
*/
class Product
{
	const PRODUCT_ON_PAGE = 6;

	public static function getLatestProduct($count = self::PRODUCT_ON_PAGE, $page = 1)
	{
		$count = intval($count);
		$page = intval($page);

		$offset = $page * $count;

		$db = DB::getConnection();

		$productsList = array();

		$result = $db->query('SELECT id, list, name, price, short_description, description, image FROM product '
					.'WHERE availablity = "1" AND status = "1"'
					.'ORDER BY list DESC '
					// .'LIMIT ' .$count
					// . 'OFFSET ' .$offset 
					);
		$i = 0;
		while ($row = $result->fetch()) {
			$productsList[$i]['id'] = $row['id'];
			$productsList[$i]['name'] = $row['name'];
			$productsList[$i]['price'] = $row['price'];
			$productsList[$i]['short_description'] = $row['short_description'];
			$productsList[$i]['description'] = $row['description'];
			$productsList[$i]['image'] = $row['image'];
			$i++;
		}
		return $productsList;
	}
	public static function getProductsListByCategory($categoryId = false, $page = 1)
	{
		if ($categoryId) {
			$page = intval($page);
			$offset = ($page -1) * self::PRODUCT_ON_PAGE;

			$db = DB::getConnection();
			$products = array();
			$result = $db->query("SELECT id, name, price, code, image, short_description, category_id FROM product "
					. "WHERE status = '1' AND category_id = '$categoryId' "
					. "ORDER BY code DESC "
					. "LIMIT ".self::PRODUCT_ON_PAGE
					// . 'OFFSET ' . $offset 
					);
			$i = 0;
			while ($row = $result->fetch()) {
			$products[$i]['id'] = $row['id'];
			$products[$i]['name'] = $row['name'];
			$products[$i]['code'] = $row['code'];
			$products[$i]['price'] = $row['price'];
			$products[$i]['image'] = $row['image'];
			$products[$i]['category_id'] = $row['category_id'];
			$products[$i]['short_description'] = $row['short_description'];
			$i++;
			}
		}
		return $products;
	}


	public static function getProductsOfCategory($categoryId = false, $page = 1)
	{
		if ($categoryId) {
			$page = intval($page);
			$offset = ($page -1) * self::PRODUCT_ON_PAGE;

			$db = DB::getConnection();
			$products = array();
			$result = $db->query("SELECT id, name, code, category_id FROM product "
					. "WHERE status = '1' AND category_id = '$categoryId' "
					. "ORDER BY code DESC "
					. "LIMIT ".self::PRODUCT_ON_PAGE
					// . 'OFFSET ' . $offset 
					);
			$i = 0;
			while ($row = $result->fetch()) {
			$products[$i]['id'] = $row['id'];
			$products[$i]['name'] = $row['name'];
			$products[$i]['code'] = $row['code'];
			$products[$i]['category_id'] = $row['category_id'];
			$i++;
			}
		}
		return $products;
	}

		public static function getProductByID($id)
		{
			$id = intval($id);

			if($id) {
				$db = DB::getConnection();

				$result = $db->query('SELECT * FROM product WHERE id='. $id);
				$result->setFetchMode(PDO::FETCH_ASSOC);
				return $result->fetch();
			}
		} 

		public static function getTotalProductsInCategory($categoryId)
		{
			$db = DB::getConnection();

			$result = $db->query('SELECT count(id) AS count FROM product '
				. 'WHERE status= "1" AND category_id = "'. $categoryId. '"');
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$row = $result->fetch();

			return $row['count'];
		}
		public static function getProductsList()
		{
			$db = DB::getConnection();

			$result = $db->query('SELECT id, list, name, availablity FROM product ORDER BY id DESC');
			$productsList = array();
			$i = 0;
			while ($row = $result->fetch()) {
				$productsList[$i]['id'] = $row['id'];
				$productsList[$i]['list'] = $row['list'];
				$productsList[$i]['name'] = $row['name'];
				$productsList[$i]['availablity'] = $row['availablity'];
				$i++;
			}
			return $productsList;
		}
		public static  function deleteProductById($id)
		{
			$db = DB::getConnection();

			$sql = 'DELETE FROM product WHERE id = :id';

			$result = $db->prepare($sql);
			$result->bindParam(':id', $id, PDO::PARAM_INT);
			return $result->execute();
		}
		public static function createProduct($options)
		{
			$db = DB::getConnection();

			$sql = 'INSERT INTO product (name, category_id, image, short_description, description, price, status)'
			. ' VALUES (:name, :category_id, :image,  :short_description, :description, :price, :status)';

			$result = $db->prepare($sql);
			$result->bindParam(':name', $options['name'], PDO::PARAM_STR);
			$result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
			$result->bindParam(':image', $options['image'], PDO::PARAM_STR);
			$result->bindParam(':short_description', $options['short_description'], PDO::PARAM_STR);
			$result->bindParam(':description', $options['description'], PDO::PARAM_STR);
			$result->bindParam(':price', $options['price'], PDO::PARAM_INT);
			$result->bindParam(':status', $options['status'], PDO::PARAM_INT);
			if ($result->execute()) {
				return $db->lastInsertId();
			}
			return 0;
		}
		public static function updateProductById($id, $options)
		{
			$db = DB::getConnection();
			$sql = "UPDATE product SET name = :name, 
										category_id = :category_id, 
										price = :price,
										image = :image,
										short_description = :short_description, 
										description = :description, 
										status = :status 
										WHERE id = :id";

			$result = $db->prepare($sql);
			$result->bindParam(':id', $id, PDO::PARAM_INT);
			$result->bindParam(':name', $options['name'], PDO::PARAM_STR);
			$result->bindParam(':image', $options['image'], PDO::PARAM_STR);
			$result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
			$result->bindParam(':price', $options['price'], PDO::PARAM_INT);
			$result->bindParam(':short_description', $options['short_description'], PDO::PARAM_STR);
			$result->bindParam(':description', $options['description'], PDO::PARAM_STR);
			$result->bindParam(':status', $options['status'], PDO::PARAM_INT);
			return $result->execute();
		}

		public static function sortProduct($options)
		{
			$db = DB::getConnection();
			$sql = "UPDATE product SET list = :list
										WHERE id = :id";
			$result = $db->prepare($sql);
			$result->bindParam(':id', $options['id'], PDO::PARAM_INT);
			$result->bindParam(':list', $options['list'], PDO::PARAM_INT);
			return $result->execute();							
		}
		public static function sortProductInCategory($options)
		{
			$db = DB::getConnection();
			$sql = "UPDATE product SET code = :code
										WHERE id = :id";
			$result = $db->prepare($sql);
			$result->bindParam(':id', $options['id'], PDO::PARAM_INT);
			$result->bindParam(':code', $options['code'], PDO::PARAM_INT);
			return $result->execute();							
		}

		public static function MainStatusProduct($options)
		{
			$db = DB::getConnection();
			$sql = "UPDATE product SET availablity = :availablity
										WHERE id = :id";
			$result = $db->prepare($sql);
			$result->bindParam(':id', $options['id'], PDO::PARAM_INT);
			$result->bindParam(':availablity', $options['availablity'], PDO::PARAM_STR);
			return $result->execute();							
		}
}