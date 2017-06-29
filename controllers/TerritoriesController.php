<?php

include_once ROOT. '/models/Regions.php';
include_once ROOT. '/models/Cities.php';

class TerritoriesController {
    
    public static function actionView($idregion, $idcity)
    {
        $regions = array();
	$regions = Regions::getRegionsList();
        
                
    }
}
