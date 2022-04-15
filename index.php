<?php 
	require 'vendor/autoload.php';
	use plsr\Classes\Query;

	// redirect to result
	if (!empty($_POST['first']) | !empty($_POST['last']))
	{
	$post = new Query($_POST['first'], $_POST['last'], $_POST['room']);
	if ($post->getDatabase($post->getQuery()))
	{
		header("Location: result.php");
	}
	} 
	//
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<title>Last page</title>
	<link rel="stylesheet" type="text/css" href="components/css/main.css">
</head>
<body>
	<form class="decor" action="" method="post">
<div class="form-inner">
<h3>Ура, вы прошли!</h3>
<input type="First name" placeholder="Имя" name="first">
<input type="Last name" placeholder="Фамилия" name="last">
<textarea placeholder="Ваша комната" rows="1", name="room"></textarea>
<input type="submit" value="Отправить">
</div>
</form>
</body>
