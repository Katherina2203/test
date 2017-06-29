<?php


class TestController {

	public function actionIndex()
	{
		
		$testList = array();
		$testList = tests::getRegionsList();

		require_once(ROOT . '/views/test/index.php');

		return true;
	}

}