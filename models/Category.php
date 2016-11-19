<?php

require_once __DIR__ . '/../components/DB.php';
/**
* 
*/
class Category
{
		
	public static function getCategoriesList()
	{
		$db = DB::getConnection();

		$categoryList = array();
		$result = $db->query('SELECT id, name, status FROM category '
			. 'ORDER BY list_category ASC');

		$i = 0;
		while ($row = $result->fetch()) {
			$categoryList[$i]['id'] = $row['id'];
			$categoryList[$i]['name'] = $row['name'];
			$categoryList[$i]['status'] = $row['status'];
			$i++;
		}

		return $categoryList;
	}
	public static function getCategoriesListAdmin()
	{
		$db = DB::getConnection();

		$result = $db->query('SELECT id, list_category, name, sort_order, status FROM category ORDER BY id DESC');

		$categoryList = array();
		$i = 0;
		while($row = $result->fetch()){
			$categoryList[$i]['id'] = $row['id'];
			$categoryList[$i]['list_category'] = $row['list_category'];
			$categoryList[$i]['name'] = $row['name'];
			$categoryList[$i]['sort_order'] = $row['sort_order'];
			$categoryList[$i]['status'] = $row['status'];
			$i++;
		}
		return $categoryList;
	}

	public static function createCategory($options)
	{
		$db = DB::getConnection();

		$sql = 'INSERT INTO category (name, status) VALUES (:name, :status)';

		$result = $db->prepare($sql);
		$result->bindParam(':name', $options['name'], PDO::PARAM_STR);
		$result->bindParam(':status', $options['status'], PDO::PARAM_STR);
		if($result->execute()){
			return $db->lastInsertId();
		}

		return false;
	}

	public static function getCategoryById($id)
	{
		$id = intval($id);

		if ($id) {
			$db = DB::getConnection();

			$result = $db->query('SELECT name, status FROM category WHERE id='. $id);
			$result->setFetchMode(PDO::FETCH_ASSOC);
			return $result->fetch();
		}
	}

	public static function updateCategoryById($id, $options)
	{
		$db = DB::getConnection();

		$sql = 'UPDATE category SET name = :name,
									status = :status
									WHERE id = :id';
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->bindParam(':name', $options['name'], PDO::PARAM_STR);
		$result->bindParam(':status', $options['status'], PDO::PARAM_STR);
		 return $result->execute();							

	}

	public static function deleteCategoryById($id)
	{
		$db = DB::getConnection();

		$sql = 'DELETE FROM category WHERE id = :id';

		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		return $result->execute();
	}

	public static function sortCategory($options)
	{
		$db = DB::getConnection();

		$sql = 'UPDATE category SET list_category = :list_category
									WHERE id = :id';

		$result = $db->prepare($sql);
		$result->bindParam(':id', $options['id'], PDO::PARAM_INT);
		$result->bindParam(':list_category', $options['list_category'], PDO::PARAM_STR);
		return $result->execute();						
	}
}