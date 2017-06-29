<?php
include 'engine/dbconnect.php';

if(isset($_POST['signup'])){
	$login =  $_POST['login'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$idregion = $_POST['idregion'];
	$idcity = $_POST['idcity'];
	$idterritory = $_POST['idterritory'];
	
}