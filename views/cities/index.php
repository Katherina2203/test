<?php
define('ROOT',dirname(__FILE__));
include ROOT . '/views/layouts/header.php'; ?>
<section>
   <div class="container">
		<div class="row">
			<div class="col-sm-3">
                <div class="leftside">
                    <h2>citiesIndex</h2>
                    
                </div>
            </div>
                    
                    <div class="rightside">
                       <h2>Войти</h2>
                       <div class="login-form">
                            <strong><center>Войти</center></strong>
                            <form class = "form-signin" action = "login.php" method = "post">
  
                            <input type = "text" class = "form-control" name = "username" placeholder = "Введите логин" required autofocus></br>
                            <input type = "password" class = "form-control" name = "password" placeholder = "Введите пароль" required>
        
                            <button class = "btn btn-primary btn-block" type = "submit" name = "login">
                            <span class="glyphicon glyphicon-log-in"></span>&nbsp; Login</button><br/>
                                       или <a href="signup.php">зарегистрироваться</a>

</form>
</div>
                    </div>
		</div>
   </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>