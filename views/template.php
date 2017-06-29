<?php 

include 'engine/init.php';

?>

<?php include 'includes/header.php';?>

<?php

//if(!isset($_SESSION['logged_user'])){ 
	// header('location: loginform.php');
	include 'includes/loginform.php';
// }else{ 
//	 header('location: index.php');
//} 
?>

<?php include 'includes/leftside.php';?>

<?php include 'includes/footer.php';?>