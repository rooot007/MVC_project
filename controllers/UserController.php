<?php

class UserController
{

	public function actionRegister()
	{
		$name = '';
		$email = '';
		$password1 = '';
		$password2 = '';
		$result = false;

		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password1 = $_POST['password1'];
			$password2 = $_POST['password2'];

			$errors = false;

			if (!User::checkName($name)) {
				$errors[] = 'Имя не должно быть меньше 2 символов';
			}

			if (!User::checkEmail($email)) {
				$errors[] = 'Email неправильный';
			}
			if (!User::equalPass($password1, $password2)) {
				$errors[] = 'Пароль1 и пароль2 должны быть идентичны!';
			}
			
			if (!User::checkPassword($password1)) {
				$errors[] = 'Пароль не должен быть короче 6 символов';
			}

			if (!User::checkEmailExists($email)) {
				$errors[] = 'Такой email уже существует';
			}

			if ($errors == false) {
				$result = User::register($name, $email, $password1);
			}
		}

		$categories = array();
		$categories = Category::getCategoriesList();

		$settings = Setting::getInfoSettings();
		require_once __DIR__ . '/../views/user/register.php';
		return true;
	}

	public function actionLogin()
	{
		$email = '';
		$password = '';

		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$errors = false;

			#валидация полей
			if (!User::checkEmail($email)) {
				$errors[] = 'Неправильный Email';
			}
			if (!User::checkPassword($password)) {
				$errors[] = 'пароль короче 6 символов';
			}

			// проверка Существование пользователя

			$userId = User::checkUserData($email, $password);

			if ($userId == false) {
				# если данные неверны - ошибка
				$errors[] = 'Неверные данные для входа на сайт';
			} else {
				// если все ОК - создаем сессию
				User::auth($userId);
				//Потом ЗАпилить ..............................................
				session_start();
				header("Location: /cabinet/");
			}
		}

		$categories = array();
		$categories = Category::getCategoriesList();

		$settings = Setting::getInfoSettings();
		require_once(__DIR__ . '/../views/user/login.php');
		return true;
	}
	public function actionLogout()
	{
		session_start();
		unset($_SESSION['user']);
		header("Location: /");
	}
}