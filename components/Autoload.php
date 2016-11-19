<?php
function __autoload($class_name)
{
	include_once __DIR__ . '/../models/User.php';
	$array_paths = array(
		'/models/',
		'/components/'
		);

	foreach ($array_paths as $path) {
		$path = __DIR__. '/..' . $path . $class_name . '.php';
		if (is_file($path)) {
			
			include_once $path;
		}
	}
}