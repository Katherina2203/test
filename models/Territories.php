<?php
class Territories
{
	public static function getTerritoriesList() 
	{
		$db = Db::getConnection();
		$territoriesList = array();

		$result = $db->query('SELECT idterritory, idregion, idcity, name FROM territories ORDER BY idterritory ASC');
                
		$i = 0;
		while($row = $result->fetch()){
		$territoriesList[$i]['idterritory'] = $row['idterritory'];
		$territoriesList[$i]['idregion'] = $row['idregion'];
		$territoriesList[$i]['idcity'] = $row['idcity'];
		$territoriesList[$i]['name'] = $row['name'];
		$i++;
		}

	return $territoriesList;
	}
}
