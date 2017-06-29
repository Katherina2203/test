<?php
define('ROOT',dirname(__FILE__));
include_once ROOT. '/models/Regions.php';
include_once ROOT. '/models/Cities.php';

class CitiesController extends Controller
{
	public function actionView($idregion)
	{
		
		$regions = array();
		$regions = Regions::getRegionsList();
                
                $cities = Cities::getCityById($idregion);

		require_once(ROOT . '/views/cities/view.php');

		return true;
	}
}