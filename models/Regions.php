<?php

//include_once ROOT . '/components/Db.php';
//namespace models;

class Regions
{

	/** Returns single news items with specified id
	* @rapam integer &id
	*/

	public static function getRegionsItemByID($id)
	{
		$id = intval($id);

		if ($id) {
/*			$host = 'localhost';
			$dbname = 'php_base';
			$user = 'root';
			$password = '';
			$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);*/
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM regions WHERE idregion=' . $id);

			/*$result->setFetchMode(PDO::FETCH_NUM);*/
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$newsItem = $result->fetch();

			return $newsItem;
		}

	}

	/**
	* Returns an array of news items
	*/
	public static function getRegionsList() 
	{

		$db = Db::getConnection();
		$regionsList = array();

		$result = $db->query('SELECT idregion, name FROM regions '
                        . 'ORDER BY idregion ASC');

		$i = 0;
		while($row = $result->fetch()) {
			$regionsList[$i]['idregion'] = $row['idregion'];
			$regionsList[$i]['name'] = $row['name'];
			$i++;
		}

		return $regionsList;
	
}

}