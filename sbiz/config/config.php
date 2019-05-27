<?php	
	//error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
	//Database MYSQL Connection 
	$config['dbMySQL']['server'] = 'localhost';				        		   //ipaddress server database MySQL
	$config['dbMySQL']['username'] = 'root';				        		   //username database MySQL
	$config['dbMySQL']['password'] = '';					        		   //password database MySQL
	$config['dbMySQL']['database'] = 'sbiz_framework';					   		//database name MySQL

	//Application Setting
	$config['app']['name']  	 	= 'SBiZ-Framework';						   //SBiZ-Framework
	$config['app']['index']		 	= ''; 									   //index.php				
	$config['app']['domain']	 	= ''; 				      				   //domain
	$config['app']['path']  	 	= '/produk/sbiz-framework/';  			   //sub folder
	$config['app']['homepage']   	= 'welcome/welcome/index';    	  	  	   //Primary home page
	$config['app']['imagefolder']   = '';    	  		   					   //Image folder for upload file to server

	$config['app']['language']   	= 'en';    	  		   					   //Default languange app
?>
