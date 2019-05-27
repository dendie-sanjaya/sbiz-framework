<?php 	
	include_once 'sbiz/lib/connection.php';

	$query = "select id, name, message 
		from guestbook
		order by name";

	$data = $globalConDBMySQL->query($query) or die(mysqli_error());
?>
