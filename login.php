<?php

include 'engine/init.php';
include 'engine/dbconnect.php';


if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
		if($_POST['password'] == $password){
			echo $msg[] = "<center><h4 class = 'form-signin-heading'><div class='success'>Вы успешно залогиненыsuccess!<div></h4></center>";
		
			//$_SESSION['login_user'] = $login;
			//header("location: home.php");
		} else {
			echo $msg[] = "<center><h4 class = 'form-signin-heading'><div class='error'>Логин или пароль введены неверно. Повторите попытку</div></h4></center>";
			 }
	
}