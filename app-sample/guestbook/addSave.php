<?php 
		//auth::isAuth($globalUrl.'admin/login/index',$config['app']['name']);

		include 'addSaveValidate.php';
		include_once 'sbiz/lib/connection.php';

		$name = general::secureInput(trim($_POST['name']));
		$message = general::secureInput(trim($_POST['message']));

		$query = "insert guestbook	
			set name = '$name',
			  message = '$message'";

		$globalConDBMySQL->query($query) or die(mysqli_error());

		include_once 'sbiz/lib/connection-close.php';
		
		header('Location: '.$globalUrl.'app-sample/guestbook/index');
?>
