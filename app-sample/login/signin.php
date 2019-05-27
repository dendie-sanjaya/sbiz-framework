<?php 
	@session_start();
	auth::isToken($globalUrl.'admin/login/index');

	include_once 'sbiz/lib/connection.php';

	$username = general::secureInput(trim($_POST['username']));
	$password = md5(trim($_POST['password']));

	$query = "select count(username) as jml
		from user
		where username ='$username'
		  and password = '$password'";

	$tmp = $globalConDBMySQL ->query($query) or die (mysqli_error());
	$data = $tmp->fetch_array();

	include_once 'sbiz/lib/connection-close.php';

	if($data['jml'] == 1) { 
		auth::signin($username,$config['app']['name']);
		header('Location:'.$globalUrl.'admin/home/index');
	} else {
		header('Location: '.$globalUrl.'admin/login/index?msg=loginFailed');
	}
?>
