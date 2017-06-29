</div>
<div class="leftside">
<h3>Меню</h3>

<?php 
if(!isset($_SESSION['logged_user'])){ 

}else{ 
	echo 'Welcome';
} ?>
 <div class="auth">
	 Привет, 
	 <form method="post" action="logout.php">
	 <button class = "btn btn-primary btn-block" type = "submit" 
               name = "logout">Logout</button>
	 </form>
	 </div>
</div>