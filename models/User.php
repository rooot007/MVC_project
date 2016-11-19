<?php

class User
{
	public static function register($name, $email, $lastname) {
		$lastname = md5($lastname);
		$db = DB::getConnection();
		$sql = 'INSERT INTO user(name, email, lastname) '
				. 'VALUES (:name, :email, :lastname)';

		$result = $db->prepare($sql);
		$result->bindParam(':name', $name, PDO::PARAM_STR);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->bindParam(':lastname', $lastname, PDO::PARAM_STR);

		return $result->execute();
	}

	public static function edit($id, $name, $lastname)
	{
		$db = DB::getConnection();

		$sql = 'UPDATE user SET name = :name, '
				. 'lastname = :lastname WHERE id = :id';
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->bindParam(':name', $name, PDO::PARAM_STR);
		$result->bindParam(':lastname', $lastname, PDO::PARAM_STR);
		return $result->execute();
	} 

	// проверка имени не меньше 2 символов
	public static function checkName($name) 
	{
		if (strlen($name) >= 2) {
			return true;
		}
		return false;
	} 
	// проверка пароль1 равен пароль2
	public static function equalPass($password1, $password2) 
	{
		if ($password1 === $password2) {
			return true;
		}
		return false;
	} 
	// проверка пассворд не меньше 6 символов

	public static function checkPassword($password1)
	{
		if (strlen($password1) >= 6) {
			return true;
		}
		return false;
	}

	//проверка мыла
	public static function checkEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;
		}
		return false;
	}

	public static function checkEmailExists($email)
	{
		$db = DB::getConnection();

		$sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

		$result = $db->prepare($sql);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->execute();

		if ($result->fetchColumn()) 
			return false;
		return true;
	}

	public static function checkUserData($email, $lastname)
	{
		$lastname = md5($lastname);
		$db = DB::getConnection();
		$sql = 'SELECT * FROM user WHERE email = :email AND lastname = :lastname';

		$result = $db->prepare($sql);
		$result->bindParam(':email', $email, PDO::PARAM_INT);
		$result->bindParam(':lastname', $lastname, PDO::PARAM_INT);
		$result->execute();

		$user = $result->fetch();
			if ($user) {
				return $user['id'];
			}
			return false;
	}

	public static function auth($userId)
	{
		$_SESSION['user'] = $userId;
	}

	public static function checkLogged()
	{
		//если сессия есть - вернуть id user
		if (isset($_SESSION['user'])) {
			return $_SESSION['user'];
		}

		header("Location: /user/login");
	}

	public static function getUserById($id)
	{
		if ($id) {
			$db = DB::getConnection();
			$sql = 'SELECT * FROM user WHERE id = :id';

			$result = $db->prepare($sql);
			$result->bindParam(':id', $id, PDO::PARAM_INT);
			//получить данные в виде массива

			$result->setFetchMode(PDO::FETCH_ASSOC);
			$result->execute();

			return $result->fetch();
		}
	}
}