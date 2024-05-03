<?php 
	require 'db.php';
?>
 <body bgcolor="d5e9f7">
<?php if ( isset ($_SESSION['logged_user']) ) : ?>
<center>
	 <br/><table border="1">
<tr><td><center><strong>Авторизован!</strong></center></td></tr>
<tr><td><center>Привет, <?php echo $_SESSION['logged_user']->login; ?>!<br/></center></td></tr>
<tr><td><center><a href="logout.php">Выйти</a></center></td></tr>
</center>
<?php else : ?>

<center>
<table border="1">
<tr><td><center><strong>Вы не авторизованы</strong></center></td></tr>
<tr><td><center><a href="login.php">Авторизация</a></center></td></tr>
<tr><td><center><a href="signup.php">Регистрация</a></center></td></tr>

<?php endif; ?>

 	  
