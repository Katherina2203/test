<?php include ROOT . '/views/layout/header.php'; ?>
<script type="text/javascript">
    function getCity(val){
        $.ajax({
            type: "POST",
            url: "#",
            data: 'idregion=' +val,
            success: function(data){
                $("#city-list").html(data);
            }
        });
    }
    
    function getTerritory(val){
        $.ajax({
            type: "POST",
            url: "#",
            data: 'idregion=' +val,
            success: function(data){
                $("#territory-list").html(data);
            }
        });
    }
    $(document).ready(function(){
        $.easing.def = &quot;easeInOutQuad&quot;;
        $('li.button a').hover(function(e){
            var dropDown = $(this).parent().next();
            $('.dropdown').not(dropDown).slideUp('slow');
            dropDown.slideToggle('slow');
            e.preventDefault();
        });
        
    });
  });
</script>
<section>
   <div class="container">
		<div class="row">
			<div class="col-sm-3">
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
                    
    
                    
                    <h2>Области</h2>
               
                        <?php foreach ($regions as $regionItem): ?>
                           
                            <div class="panel-heading">
                                <ul>
                                    <li class="button">
                                    <a href="/regions/<?php echo $regionItem['id'];?>" >
                                        <?php echo $regionItem['name'];?>
                                    </a>
                                        
                                       
                                        
                                <?php foreach ($cities as $city): ?>
                                    <div class="panel-heading-city" style="display: none;">
                                     <ul>
                                         <li class="dropdown">
                                             <a href="/regions/<?php echo $city['id'];?>">
                                                 <?php echo $city['name'];?>
                                             </a>
                                             
                                             
                                        <?php foreach ($territories as $territoryItem): ?>    
                                             <div class="panel-heading-territory" style="display: none;"> 
                                                 <ul>
                                                     <li>
                                                        <span><?php echo $territoryItem['name'];?></span> 
                                                     </li>
                                                 </ul>
                                             </div>
                                        <?php endforeach; ?>   
                                             
                                         </li>
                                     </ul>
                                    </div>
                               <?php endforeach; ?>   
                                    </li>
                                </ul>
                            </div>
                           
                        <?php endforeach; ?>
                    
                     
                </div>
            </div>
                    
                    <div class="rightside">
                                          
                       <div class="panel">
                           <h2>Registration form</h2>
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
                    
                        <form class="form-register" method="post" action="#">
                            <label>Логин:</label><input class="form-control" type="text" name="login" placeholder="Логин" required/>
                            <label>Имя:</label><input class="form-control" type="text" name="name" placeholder="Имя" required/>
                            <label>Фамилия:</label><input class="form-control" type="text" name="surname" placeholder="Фамилия" required/>
                            <label>Email:</label><input class="form-control" type="email" name="email" placeholder="E-mail" required/>
                            <label>Пароль:</label><input class="form-control" type="password" name="password" placeholder="Пароль" required/>
                            <label>Повторный пароль:</label><input class = "form-control" type="password" name="repeat" placeholder="Повторный пароль" required >
                            <label>Регион:</label>
                              <select id="country-list" onChange="ajaxLoad('idcity,'/ajax/city.php?region='+this.options[this.selectedIndex].value, '', '', '');document.getElementById('idcity').disabled=''; " class = "form-control" name="idregion" placeholder="Регион" required>
                             
                                  <option value="" disabled="disabled">Выберите регион</option>
		              <?php 
		             
                              foreach ($regions as $regionItem): ?>
		         	<option value="<?php echo $regionItem['idregion']; ?>" ><?php echo $regionItem['name']; ?></option>
		                <?php endforeach; ?>
		             </select>
                       
                            <label>Город:</label>
                             <select id="city-list"  onChange="ajaxLoad('idterritory,'/ajax/city.php?territory='+this.options[this.selectedIndex].value, '', '', '');document.getElementById('idcity').disabled=''; " class = "form-control" name="idcity" placeholder="Город" required>
                              <option value="" disabled="disabled">Выберите город</option>
		              <?php 
		              foreach ($allcities as $cityItem): ?>
		         	<option value="<?php echo $cityItem['idcity']; ?>"><?php echo $cityItem['name']; ?></option>
		                <?php endforeach; ?>
		             </select>
                            
                            <label>Населенный пункт:</label>
                             <select id="territory-list"  onChange="ajaxLoad('idterritory,'/ajax/territory.php?territory='+this.options[this.selectedIndex].value, '', '', '');document.getElementById('idcity').disabled=''; " class = "form-control" name="idterritory" placeholder="Населенный пункт" required>
                              <option value="" disabled="disabled">Выберите населенный пункт</option>
		              <?php 
		              foreach ($territories as $territoryItem): ?>
		         	<option value="<?php echo $territoryItem['idterritory']; ?>"><?php echo $territoryItem['name']; ?></option>
		                <?php endforeach; ?>
		             </select>
                            <button class = "btn btn-primary btn-block btn-submit" type="submit" name="submit">Регистрация</button>
                        </form>
                    </div>
                    
                
                <?php endif; ?>
                <br/>
                <br/>
                       </div>
                    </div>
		</div>
   </div>
</section>

<?php include ROOT . '/views/layout/footer.php'; ?>