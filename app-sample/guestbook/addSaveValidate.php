<?php 
	//auth::isAuth($globalUrl.'admin/login/index',$config['app']['name']);

	$status = true;
	$msgError = array();

	$name = general::secureInput(trim($_POST['name']));
	$message = general::secureInput(trim($_POST['message']));

	if(strlen(trim($name)) < 1) {
		$status = false;
		$msgError['name'] = 'please input username';
	}

	if(strlen(trim($name)) < 1) {
		$status = false;
		$msgError['message'] = 'please input username';
	}


	if($status == false) {
		include 'add.php';
		exit;
	}
?>
