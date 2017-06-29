<?php
define('ROOT',dirname(__FILE__));
include_once ROOT.'/models/Regions.php';

class RegionsController {

	public function actionIndex()
	{
		
		$regions = array();
		$regions = Regions::getRegionsList();
                
                

		require_once(ROOT . '/views/regions/index.php');
     
		return true;
	}

	public function actionView($id)
	{
	    if ($id) {
		$regionsItem = Regions::getRegionsItemByID($id);

	    require_once(ROOT . '/views/regions/view.php');

		//	echo 'actionView'; 
		}

		return true;

	}
        
        public function actionCity($id)
        {
            
        }

}

