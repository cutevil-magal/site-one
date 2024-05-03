<!DOCTYPE html>
<center>
<table border='3'>
<?php
$link = mysqli_connect('localhost', 'e95082j6_root', 'seshkek228', 'e95082j6_root');

$quC = mysqli_query($link, "SELECT q FROM q");
$quR = mysqli_fetch_array($quC);

$an = mysqli_query($link, "SELECT * FROM a");
$an1R = mysqli_fetch_array($an);
$an2R = mysqli_fetch_array($an);
$an3R = mysqli_fetch_array($an);
$an4R = mysqli_fetch_array($an);

$rightC = mysqli_query($link, "SELECT r FROM a");
$anR = mysqli_fetch_array($rightC);
$qr = $an1R['r'];
    if( isset( $_POST['check'] ) )
    {if (!$_POST['ans']){
	echo ("<table border='3'><tr><td><center><p>нет ответа</p></center></td></tr>");}
		else if ($_POST['ans']==$qr){
      echo ("<tr><td><center><p>Правильный ответ</p></center></td></tr>");
		}
		else {
			echo ("<tr><td><center><p>НЕправильный ответ!</p></center></td></tr>");
			}
		}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
</head>
<body>
<body bgcolor="d5e9f7">
<form method="POST">
<tr><td><center><p><?php  echo $quR['q']  ?> </p>
<tr><td><center><p><input name="ans" type="radio" value="1"> <?php echo $an1R['a1']  ?> </p></center></td></tr>
<tr><td><center><p><input name="ans" type="radio" value="2"> <?php echo $an1R['a2']  ?> </p></center></td></tr>
<tr><td><center><p><input name="ans" type="radio" value="3"> <?php echo $an1R['a3']  ?> </p></center></td></tr>
<tr><td><center><p><input name="ans" type="radio" value="4"> <?php echo $an1R['a4']  ?> </p></center></td></tr>
<tr><td><center><p><input type="submit" name="check" value="Выбрать"></p></center></td></tr>
<tr><td><center><strong><tr><td><center><a href="home.php">завершить тест</a></center></td></tr></strong></center></td></tr>
</form>



</body>
</html>
</center>