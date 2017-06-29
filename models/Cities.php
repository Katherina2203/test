<?php

class Cities
{
	public static function getCitiesList() 
	{
		$db = Db::getConnection();
		
		$citiesList = array();
		
		$result = $db->query('SELECT * FROM cities'
                        . ' ORDER BY idcity ASC');
		
		$i = 0;
		while($row = $result->fetch()) {
			$citiesList[$i]['idcity'] = $row['idcity'];
			$citiesList[$i]['idregion'] = $row['idregion'];
			$citiesList[$i]['name'] = $row['name'];
			$i++;
		}
		
		return $citiesList;
	}
        
        public static function getCityById($id)
        {
            $id = intval($id);
            
            if($id){
                $db = Db::getConnection();
                
                $result = $db->query('SELECT * FROM cities WHERE idcity=' . $id);
                $result->setFetchMode(PDO::FETCH_ASSOC);
                
                return $result->fetch();
            }
            
        }
        
        public static function getCitiesListByRegions($idregion = NULL)
        {
           
            
            if($idregion){
                
              //  $idregion = intval($idregion);
                $db = Db::getConnection();
                $cities = array();
                $result = $db->query("SELECT * FROM cities WHERE idregion=" . $idregion);
                
                 $i = 0;
            while ($row = $result->fetch()) {
                $cities[$i]['idcity'] = $row['idcity'];
                $cities[$i]['idregion'] = $row['idregion'];
                $cities[$i]['name'] = $row['name'];
               
                $i++;
                var_dump($cities);
            }

            return $cities; 
                
            }
        }
}