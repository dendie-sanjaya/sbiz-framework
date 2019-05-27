<?php
	$globalModul = globalFunctionUri(3);	
	$globalModul = str_replace(explode('/',$config['app']['path']), '', $globalModul);

	if(strlen(str_replace('/', '', $globalModul)) < 1) {
		$globalModul = $config['app']['homepage'];
	}

	switch ($globalModul) {		
	case 'welcome/welcome/index':
			include_once 'app-welcome/welcome/index.php';	
		break;
	case (globalFunctionUri(3) == 'app-sample/guestbook/index'):
			language::set($config['app']['language']);		
			include_once 'app-sample/guestbook/index.php';
		break;	
	case (globalFunctionUri(3) == 'app-sample/guestbook/add'):
			language::set($config['app']['language']);
			include_once 'app-sample/guestbook/add.php';
		break;	
	case (globalFunctionUri(3) == 'app-sample/guestbook/addSave'):
			language::set($config['app']['language']);
			include_once 'app-sample/guestbook/addSave.php';
		break;	
	case (globalFunctionUri(3) == 'app-sample/guestbook/edit'):
			language::set($config['app']['language']);	
			include_once 'app-sample/guestbook/edit.php';
		break;	
	case (globalFunctionUri(3) == 'app-sample/guestbook/editSave'):
			language::set($config['app']['language']);	
			include_once 'app-sample/guestbook/editSave.php';
		break;	
	case (globalFunctionUri(3) == 'app-sample/guestbook/delete'):
			language::set($config['app']['language']);	
			include_once 'app-sample/guestbook/delete.php';
		break;	
	case (globalFunctionUri(3) == 'app-sample/guestbook/view'):
			language::set($config['app']['language']);
			include_once 'app-sample/guestbook/view.php';
		break;	
	default:
			include_once 'app-welcome/welcome/index.php';
		break;
	}


	function globalFunctionUri($indexLast,$position=0) {
		$globalUri = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
		if($indexLast == 4) {
			$globalModul = $globalUri[count($globalUri)-4].'/'.$globalUri[count($globalUri)-3].'/'.$globalUri[count($globalUri)-2].'/'.$globalUri[count($globalUri)-1];
		}			

		if($indexLast == 3) {
			$globalModul = $globalUri[count($globalUri)-3].'/'.$globalUri[count($globalUri)-2].'/'.$globalUri[count($globalUri)-1];
		}			

		if($indexLast == 2) {
			$globalModul = $globalUri[count($globalUri)-2].'/'.$globalUri[count($globalUri)-1];
		}			

		if($indexLast == 1) {
			$globalModul = $globalUri[count($globalUri)-1];
		}	

		if($position != 0) {
		  	$tmp = explode('/',$globalModul);	
		  	$globalModul = $tmp[$position-1];
		}		

		return $globalModul;
	}	

?>


