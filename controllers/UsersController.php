<?php

class UsersController extends Controller
{
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