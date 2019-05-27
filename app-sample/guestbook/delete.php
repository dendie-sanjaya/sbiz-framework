<?php 
	//auth::isAuth($globalUrl.'admin/login/index',$config['app']['name']);

	include_once 'sbiz/lib/connection.php';
	
	$id = general::secureInput(trim($_REQUEST['id']));
	echo $query = "delete from guestbook
		where id='$id'";

	$globalConDBMySQL->query($query) or die(mysqli_error());

	include_once 'sbiz/lib/connection-close.php';

	header('Location: '.$globalUrl.'app-sample/guestbook/index');
?>
