<?php

class SiteController
{
	
	public function actionIndex()
	{
		$settings = Setting::getInfoSettings();

		
		$categories = array();
		$categories= Category::getCategoriesList();

		$latestProducts = array();
		$latestProducts = Product::getLatestProduct(6);
 
		require_once __DIR__ . '/../views/site/index.php';
		return true;
	}

	public function actionContact()
	{
		$settings = Setting::getInfoSettings();

		$categories = array();
		$categories= Category::getCategoriesList();

		$userEmail = '';
		$userText = '';
		$result = false;
		
		if (isset($_POST['submit'])){

			$userEmail = $_POST['userEmail'];
			$userText = $_POST['userText'];

			$errors = false;

			#field validation
			if (!User::checkEmail($userEmail)) {
				$errors[] = 'Email введен некорректно';
			}

			if ($errors == false) {
				$adminEmail = 'id.kharkov.ua@gmail.com';
				$message = "Text: ($userText). From: ($userEmail)";
				$subject = "Letter subject";
				$result = mail($adminEmail, $subject, $message);
				$result = true;
			}
		}

		require_once __DIR__ . '/../views/site/contact.php';

		return true;	
	}
	public function actionMassege()
	{
		$categories = array();
		$categories= Category::getCategoriesList();

		$settings = Setting::getInfoSettings();

		require_once __DIR__ . '/../views/user/massege.php';
		return true;
	}

	public function actionContacts()
	{
		$categories = array();
		$categories= Category::getCategoriesList();

		$settings = Setting::getInfoSettings();

		require_once __DIR__ . '/../views/user/contacts.php';
		return true;
	}

	public function actionAbout()
	{
		$categories = array();
		$categories= Category::getCategoriesList();
		$settings = Setting::getInfoSettings();

		require_once __DIR__ . '/../views/user/about.php';
		return true;
	}

	public function actionDelivery()
	{
		$categories = array();
		$categories= Category::getCategoriesList();
		$settings = Setting::getInfoSettings();
		
		require_once __DIR__ . '/../views/user/delivery.php';
		return true;
	}
}