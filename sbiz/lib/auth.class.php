<?php 
/*******************************************************************************                                                      
* Lib:      Autentification Class                                              *
* Version:  1.0.0 	                                                           *
* Date:     12-03-2019                                                         *
* Author:   Dendie                                                             *
* License:  Freeware                                                           *
*									       									   *
* This class for authentification function			    					   *
*									       									   *
* You can  use, modification and distribution 								   *	                                                                  
*******************************************************************************/
@session_start();

if (!class_exists('auth')) {
	class auth 
	{		
		public static function signin($username,$appName)
		{
			$_SESSION['login'] = $username;
			$_SESSION['loginApp'] = $appName;
		} 		

		public static function signOut($str)
		{
			session_start();
			session_destroy();

		} 		

		public static function isAuth($modulNotAuth,$appName)
		{
			if(!$_SESSION['login']) {
				header('Location: '.$modulNotAuth);
			} else {
				if($_SESSION['loginApp'] != $appName) {
				header('Location: '.$modulNotAuth);
				}
			}	
		}

		public static function isToken($modulNotAuth) {
			if(isset($_REQUEST['token'])) {  				
				if($_REQUEST['token'] != $_SESSION['token']) {
					header('Location: '.$modulNotAuth);	
				}
			} else { 
				header('Location: '.$modulNotAuth);	
			}			
		} 


		public static function token()
		{
			$_SESSION['token'] = mt_rand(1000000,100000000000);			
		} 		

	}
}	

?>
