<?php 
    session_start();
    $host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "poeforum";
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
?>