<?php 
define('ROOT',dirname(__FILE__));
include  ROOT.'/views/layout/header.php'; ?>

<section>
   <div class="container">
		<div class="row">
			
                <div class="leftside">
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
           
                    
                <div class="rightside">
                        <h2>Области</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($regions as $regionItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                          
                                        <a href="/regions/<?php echo $regionItem['id'];?>">
                                            <?php  
                                            echo $regionItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
		</div>
   </div>
</section>

<?php require ROOT.'/views/layout/footer.php'; ?>