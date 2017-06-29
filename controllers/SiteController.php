<?php
//namespace test\controllers;
define('ROOT',dirname(__FILE__));
include_once ROOT. '/models/Regions.php';
include_once ROOT. '/models/Cities.php';
include_once ROOT . '/models/Territories.php';

class SiteController
{
     public function actionIndextsite()
    {
      
        $result = false;
          
	$regions = array();
	$regions = Regions::getRegionsList();
        
        $cities = array();
        $cities = Cities::getCitiesList();
        
        $territories = array();
        $territories = Territories::getTerritoriesList();
		
	require_once(ROOT . '/views/site/index.php');
		
	return true;
    }
    
    public function actionSignup()
        {
            $login = '';
            $email = '';
            $password = '';
            $result = false;
            
            if (isset($_POST['submit'])) {
                $login = $_POST['login'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                
                 $errors = false;
                 
               if(!User::checkLogin($login)){
                   $errors[] = 'Имя не должно быть короче 3 символов';
               }
               
               if(!User::ckeckEmail($email)){
                   $errors[] = 'Неправильный email';
               }
               
               if(!User::checkPassword($password)){
                   $errors[] = 'пароль не должно быть короче 3 символов';
               }
               
               if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
               }
               
               
               if ($errors == false) {
                $result = User::register($name, $email, $password);
               }
            
            
            }
            
             require_once(ROOT . '/views/user/signup.php');
             return true;
        }
}
