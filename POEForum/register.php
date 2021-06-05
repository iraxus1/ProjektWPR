<?php 
require_once("dbconnect.php");

if(!isset($_POST['Rlogin'])){
    $_SESSION['blad'] = '<span style="color:red"></span>';
    header('Location: Rejestracja.php');
}else{
    $login = $_POST['Rlogin'];
	$haslo = $_POST['Rhaslo'];
    $haslo2 = $_POST['Rhaslo2'];
    unset($_POST['Rlogin'], $_POST['Rhaslo'], $_POST['Rhaslo2']);
    echo $haslo2." ...".$haslo."<br>";
    if($haslo!=$haslo2){
        $_SESSION['blad'] = '<span style="color:red">Hasła nie są takie same!</span>';
        header('Location: Rejestracja.php');
    }
    else if ($polaczenie->connect_errno!=0) echo "Error: ".$polaczenie->connect_errno;
	else{
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
	
		if ($rezultat = $polaczenie->query(
		sprintf("SELECT * FROM users WHERE login='%s'",
		mysqli_real_escape_string($polaczenie,$login))))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
                $_SESSION['blad'] = '<span style="color:red">Konto o takim loginie już istnieje!</span>';
				header('Location: Rejestracja.php');
			}else{
                
                $rezultat = $polaczenie->query(
                    sprintf("INSERT INTO users (id,login,password) VALUES (NULL,'%s','%s')",
                    mysqli_real_escape_string($polaczenie,$login),
                    mysqli_real_escape_string($polaczenie,$haslo)));
                print_r($polaczenie);
				$_SESSION['blad'] = '<span style="color:green">Poprawnie zarejestrowano</span>';
                header('Location: index2.php');
			}
			
		}else{
			echo '<script language="javascript">';
			echo 'alert("message unsuccessfully sent")';
			echo '</script>';
		}
		$polaczenie->close();
    }
}
?>