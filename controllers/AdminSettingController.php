<?php

/**
* 
*/
class AdminSettingController extends AdminBase
{
	
	public  function actionUpdate()
	{
		self::checkAdmin();

		$settings = Setting::getInfoSettings();

		if (isset($_POST['submit'])) {
			$options['logo'] = $_POST['logo'];
			$options['under_logo'] = $_POST['under_logo'];
			$options['header'] = $_POST['header'];
			$options['price_mod'] = $_POST['price_mod'];
			$options['contacts'] = $_POST['contacts'];
			$options['about'] = $_POST['about'];
			$options['delivery'] = $_POST['delivery'];

			
			if (Setting::updateSetting(1, $options)) {
				#picture
			}
		header('Location: /admin');
		}
		if (isset($_POST['change_icon']) && is_uploaded_file($_FILES["favicon_change"]["tmp_name"])) {
			move_uploaded_file($_FILES["favicon_change"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/img/favicon.ico");
			header('Location: /admin');
		}
		if (isset($_POST['menu_image']) && is_uploaded_file($_FILES["menubar_image"]["tmp_name"])) {
			move_uploaded_file($_FILES["menubar_image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/img/sidebar_00.png");
			header('Location: /admin');
		}
		 require_once(__DIR__. '/../views/admin_setting/update.php');
		return true;	
	}
}