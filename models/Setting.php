<?php

class Setting
{
	public static function getInfoSettings()
	{
		$db = DB::getConnection();
		
		$result = $db->query('SELECT * FROM site_info WHERE id = 1');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		return $result->fetch();
	}

	public static function updateSetting($id, $options)
	{
		$db = DB::getConnection();
		$sql = 'UPDATE site_info SET logo = :logo,
									under_logo = :under_logo,
									header = :header,
									price_mod = :price_mod,
									contacts = :contacts,
									about = :about,
									delivery = :delivery
									WHERE id = :id';
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->bindParam(':logo', $options['logo'], PDO::PARAM_STR);
		$result->bindParam(':under_logo', $options['under_logo'], PDO::PARAM_STR);
		$result->bindParam(':header', $options['header'], PDO::PARAM_STR);
		$result->bindParam(':price_mod', $options['price_mod'], PDO::PARAM_INT);
		$result->bindParam(':contacts', $options['contacts'], PDO::PARAM_STR);
		$result->bindParam(':about', $options['about'], PDO::PARAM_STR);
		$result->bindParam(':delivery', $options['delivery'], PDO::PARAM_STR);
		return $result->execute();
	}
}