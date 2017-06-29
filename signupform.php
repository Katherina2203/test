<?php // include 'includes/header.php';?>
<strong><center>Форма регистрации</center></strong>
<script  type="text/javascript">
function getCity(val){
	$.ajax({
		type:"POST",
		url: "get_city.php",
		data:'id_country='+val,
		success:function(data){
			$("#city-list").html(data);
		}
	});
}
</script>

<form class="form-register" method="post" action="signup.php">

		<label>Имя:</label><input class="form-control" type="text" id="name" name="name" placeholder="surname" required><br/>
		<label>Фамилия:</label><input class="form-control" type="text" id="surname" name="surname" placeholder="surname" required><br/>
		<label>Email:</label><input class="form-control" type="text" id="email" name="email" placeholder="Email" required><br/>
		<label>Пароль:</label><input class = "form-control" id="password" type="password" name="password" placeholder="Пароль" required><br/>
		<label>Повторный пароль:</label><input class = "form-control" type="password" name="repeat" placeholder="Повторный пароль" required ><br/>
		<label>Страна:</label>
		<select id="country-list" onChange="getCity(this.value)" class = "form-control" name="id_country" required>
		<option value="">Выберите страну</option>
		<?php 
		$sql = mysqli_query($connect,'SELECT * FROM regions');
		while($rs = mysqli_fetch_assoc($sql)){ ?>
			<option value="<?php echo $rs['id_country']; ?>"><?php echo $rs['country_name']; ?></option>
		<?php }	?>
		</select><br/>
		<label>Город:</label>
		<select id="city-list" class = "form-control" name="id_city" required>
		<option value="">Выберите город</option>
		</select><br/>
		<label>Область:</label>
		<select id="city-list" class = "form-control" name="id_city" required>
		<option value="">Выберите город</option>
		</select><br/>
		
		<button class = "btn btn-primary btn-block btn-submit" type="submit" name="submit">
		Зарегистрироваться</button>
		<button class = "btn btn-primary btn-block" name="refresh">Refresh</button>
	</form>
