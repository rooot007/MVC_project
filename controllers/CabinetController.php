<?php

class CabinetController
{
	public function actionIndex()
	{

		$settings = Setting::getInfoSettings();

		
		$categories = array();
		$categories= Category::getCategoriesList();

		$userId = User::checkLogged();

		//info about user from DB
		$user = User::getUserById($userId);
		require_once(__DIR__ . "/../views/cabinet/index.php");

		return true;
	}
	public function actionEdit()
	{
		$settings = Setting::getInfoSettings();

		
		$categories = array();
		$categories= Category::getCategoriesList();
		
		$userId = User::checkLogged();

		$user = User::getUserById($userId);

		$name = $user['name'];
		$password = $user['lastname'];

		$result = false;

		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$password = $_POST['password'];

			$errors = false;

			if (!User::checkName($name)) {
				$errors[] = 'Имя не должно быть меньше 2 символов';
			}

			if (!User::checkPassword($password1)) {
				$errors[] = 'Пароль не должен быть короче 6 символов';
			}

			if ($errors == false) {
				$result = User::edit($userId, $name, $password);
			}
		}

		require_once (__DIR__ . '/../views/cabinet/edit.php');

		return true;
	}
}