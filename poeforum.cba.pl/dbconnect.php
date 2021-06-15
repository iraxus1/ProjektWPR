<?php 
    session_start();
    $host = "localhost";
	$db_user = "iraxus";
	$db_password = "ZAQ!2wsx";
	$db_name = "poeforum";
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
?>