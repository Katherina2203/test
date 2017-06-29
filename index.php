<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ROOT',dirname(__FILE__));

//define ('DS', DIRECTORY_SEPARATOR);
//$sitePath = realpath(dirname(__FILE__) . DS);
//define ('SITE_PATH', $sitePath); 


//require_once(ROOT.'/components/Router.php');
//require_once(ROOT.'/components/Db.php');
require_once(ROOT.'/components/Autoload.php');

$router = new Router();
$router->run();


