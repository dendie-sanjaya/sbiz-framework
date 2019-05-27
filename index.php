<?php 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
	@session_start();

	include_once 'sbiz/config/config.php';

	$globalUrl = $config['app']['domain'].$config['app']['path'].$config['app']['index'];

	include_once 'sbiz/lib/general.class.php';
	include_once 'sbiz/lib/language.class.php';
	include_once 'sbiz/lib/auth.class.php';

	auth::token();

	include_once 'sbiz/config/route.php'; 
?>
