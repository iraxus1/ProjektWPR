<?php
    
    if(!isset($_POST['autor'])){
        header('Location: forum.php');
        exit();
    }

    $nick = $_POST['autor'];
    $tresc = $_POST['tresc'];

    
        
        require_once("dbconnect2.php");
        
        try{
            if($polaczenie->connect_errno != 0){
                throw new Exception(mysqli_connect_error());
            }
            else{
                
                mysqli_query($polaczenie, "SET CHARSET utf8");
                mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
                
                $data = date("d-m-Y | h:i:s");
                
                if($polaczenie->query("INSERT INTO komentarze VALUE(NULL, '$tresc', '$nick', '$data')")){
                    $_SESSION['wyslano'] = true;
                    header('Location: forum.php');
                }
                else{
                    $_SESSION['blad'] = "Błąd podczas wysyłania kometarza!";
                    header('Location: forum.php');
                }
                
                $polaczenie->close();
            }
            
        }
        catch(Exception $error){
            echo "Connection Error!";
        }
    
?>