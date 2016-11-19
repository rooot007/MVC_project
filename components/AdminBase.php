<?php

abstract class AdminBase
{
	public static function checkAdmin()
	{
		//check login user
		$userId = User::checkLogged();

		//user info
		$user = User::getUserById($userId);

		//if current user admin enter him
		if ($user['is_admin'] == 1) {
			return true;
		}
		//else end script
		die('Access denied');
	}
}