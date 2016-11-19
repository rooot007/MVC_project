<?php

class DB
{
	public static function getConnection()
	{
		$paramsPath = __DIR__. '/../config/db_params.php';
		$params = include($paramsPath);

		$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
		$db = new PDO($dsn, $params['user'], $params['password']);
		$db->exec("SET NAMES utf8");
		return $db;
	}
}