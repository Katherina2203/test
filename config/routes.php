<?php
return array(
    'cities/([0-9]+)' => 'cities/view/$1',
    'regions/([0-9]+)' => 'regions/view/$1',
	
    'regions' => 'regions/index', 
    'cities/([0-9]+)' => 'regions/city/$1',
    
    'koatuu' => 'koatuu/index',

    
  //  'catalog' => 'catalog/index', // actionIndex в CatalogController
  //  'category/([0-9]+)' => 'catalog/category/$1',  // actionCategory в CatalogController

    '' => 'site/index',
    

	);