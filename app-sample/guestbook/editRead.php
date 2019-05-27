<?php 
	//auth::isAuth($globalUrl.'admin/login/index',$config['app']['name']);

	include_once 'sbiz/lib/connection.php';
			
	$id = general::secureInput($_REQUEST['id']);

	$query = "select id, name, message
		from guestbook
		where id = '$id'";
	$tmp = $globalConDBMySQL->query($query) or die(mysqli_error());

	$data = $tmp->fetch_array();

	include_once 'sbiz/lib/connection-close.php';;
?>
