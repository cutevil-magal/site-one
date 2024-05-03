<?php 
	require 'db.php';

	$data = $_POST;
	if ( isset($data['do_login']) )
	{
		$user = R::findOne('users', 'login = ?', array($data['login']));
		if ( $user )
		{
			//логин существует
			if ( password_verify($data['password'], $user->password) )
			{
				//если пароль совпадает, то нужно авторизовать пользователя
				$_SESSION['logged_user'] = $user;
				echo '<div style="color:green;">Вы авторизованы!<br/> Можете перейти на <a href="home.php">главную</a> страницу.</div><hr>';
			}else
			{
				$errors[] = 'Неверно введен пароль!';
			}

		}else
		{
			$errors[] = 'Пользователь с таким логином не найден!';
		}
		
		if ( ! empty($errors) )
		{
			//выводим ошибки авторизации
			echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
		}

	}

?>


<form action="login.php" method="POST">
 <body bgcolor="d5e9f7">
<center>
<h2>Авторизация</h2>
<table border="1">
<tr><td><center><strong>Логин</strong><input type="text" name="login" value="<?php echo @$data['login']; ?>"><br/></center></td></tr>
<tr><td><center><strong>Пароль</strong><input type="password" name="password" value="<?php echo @$data['password']; ?>"><br/></center></td></tr>
<tr><td><center><button type="submit" name="do_login">Войти</button></center></td></tr>
<tr><td><center><a href="index.php">Назад</a></button></center></td></tr>	
</form>