<?php 
	auth::signout($username,$config['app']['name']);
	header('Location: '.$globalUrl.'admin/login/index');
?>
