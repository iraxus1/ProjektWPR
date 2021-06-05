<?php 
    require_once("dbconnect.php");

    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: SessionCheck.php');
		exit();
	}    

	if ($polaczenie->connect_errno!=0){
		echo "Error: ".$polaczenie->connect_errno;
	}
	else{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		$_SESSION['user']=$login;

		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
	
		if ($rezultat = $polaczenie->query(
		sprintf("SELECT * FROM users WHERE login='%s' AND password='%s'",
		mysqli_real_escape_string($polaczenie,$login),
		mysqli_real_escape_string($polaczenie,$haslo))))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['zalogowany'] = true;
				
				$wiersz = $rezultat->fetch_assoc();
				$_SESSION['id'] = $wiersz['id'];
				$_SESSION['user'] = $wiersz['login'];
				unset($_SESSION['blad']);
				$rezultat->free_result();
				$folder = "upload/".$_SESSION["user"];
                if(!file_exists($folder) && !is_dir($folder))
					mkdir($folder,0777);
				echo $folder;
				header('Location: SessionCheck.php');
			} else {
				
				$_SESSION['blad'] = '<span style="color:red;text-align: center;font-size:30;">Nieprawidłowy login lub hasło!</span>';
				header('Location: index2.php');
				
			}
			
		}else{
			echo '<script language="javascript">';
			echo 'alert("message unsuccessfully sent")';
			echo '</script>';
		}
		$polaczenie->close();
    }
    phpinfo();
?>