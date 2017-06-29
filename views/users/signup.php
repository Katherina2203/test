<?php 
define('ROOT',dirname(__FILE__));

include ROOT . '/views/layout/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if ($result): ?>
                    <p>Вы зарегистрированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form">
                        <h2>Регистрация на сайте</h2>
                        <form class="form-register" method="post" action="#">
                            <label>Имя:</label><input class="form-control" type="text" name="login" placeholder="Логин" value="<?php echo $login; ?>" required/>
                            <label>Email:</label><input class="form-control" type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" required/>
                            <label>Пароль:</label><input class="form-control" type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>" required/>
                            <label>Повторный пароль:</label><input class = "form-control" type="password" name="repeat" placeholder="Повторный пароль" required >
                            <button class = "btn btn-primary btn-block btn-submit" type="submit" name="submit">Регистрация</button>
                        </form>
                    </div>
                    
                
                <?php endif; ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layout/footer.php'; ?>