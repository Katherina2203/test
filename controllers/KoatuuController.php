<?php
define('ROOT',dirname(__FILE__));
include_once ROOT. '\models\Koatuu.php';
include_once ROOT. '\models\Regions.php';

class KoatuuController {

	public function actionIndex()
	{
            $regions = array();
	    $regions = Regions::getRegionsList();
             
            $koatuu = array();
            $koatuu = Koatuu::getT_koatuu_treeList();

            require_once(ROOT . '/views/koatuu/index.php');

            return true;
	}

	

}

