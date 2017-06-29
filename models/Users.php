<?php

class Users
{
    public static function Register($login, $email, $password){
        $db = Db::getConnection();
        
        $sql = 'INSERT INTO user (login, email, password)'
                . 'VALUES (:login, :email, :password)';
        
        $result = $db->prepare($sql);
        $result = bindParam(':login', $login, PDO::PARAM_STR);
        $result = bindParam(':email', $email, PDO::PARAM_STR);
        $result = bindParam(':password', $password, PDO::PARAM_STR);
         
        return $result->execute();
    }

        public static function checkLogin($login){
        if(strlen($login) >=3 ){return true;}
        
        return false;
    }
    
    public static function checkPassword($password){
        if(strlen($password) >=6 ){return true;}
        
        return false;
    }
    
    public static function checkEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){return true;}
        
        return false;
    }
    
    public static function checkEmailExists($email){
        $db = Db::getConnection();
        
        $sql = "SELECT count(*) FROM users WHERE email = :email";
        $result = $db->prepare($sql);
        $result = bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
    }
}