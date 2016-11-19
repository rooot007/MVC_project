<?php

$output = '';
var_dump($_FILES);
	die();

if (is_array($_FILES)) {
	var_dump($_FILES);
	die();
	foreach ($_FILES['files']['name'] as $name => $value) {
		$file_name = explode(".", $_FILES['files']['name'][$name]);

		$allowed_ext = array("jpg", "jpeg", "png", "gif");

		if (in_array($file_name[1], $allowed_ext)) {
			
			$new_name = md5(rand()) . '.' . $file_name[1];

			$sourcePath = $_FILES['files']['tmp_name'][$name];

			$targetPath = "/template/img/".$new_name;

			if (move_uploaded_file($sourcePath, $targetPath)) {
				
				$output .= '<img src="'. $targetPath. '" width= "50px" height="50px" />';
			}
		}
	}

	echo $output;
}