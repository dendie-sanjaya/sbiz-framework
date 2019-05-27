<?php 
	include 'editSaveValidate.php';
	include_once 'sbiz/lib/connection.php';

	$id = general::secureInput(trim($_POST['id']));
	$name = general::secureInput(trim($_POST['name']));
	$message = general::secureInput(trim($_POST['message']));

	$query = "update guestbook	
		set name = '$name',
		  message = '$message'
		where id = '$id'";

	$globalConDBMySQL->query($query) or die(mysqli_error());

	include_once 'sbiz/lib/connection-close.php';
	
	header('Location: '.$globalUrl.'app-sample/guestbook/index');
?>
