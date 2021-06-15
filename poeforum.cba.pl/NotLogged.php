<?php 
    if (!isset($_SESSION['zalogowany']))
	{
        $_SESSION['blad'] = '<span style="color:red;text-align: center;font-size:30px">Zaloguj się, aby kontynuować.</span>';
		header('Location: index2.php');
		exit();
    }
?>