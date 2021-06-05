<?php 
    require_once("dbconnect.php");
    require_once("NotLogged.php");
    //usuniecie uzytkownika
    $sql="DELETE FROM users WHERE id=".$_SESSION['id'];
    mysqli_query($polaczenie,$sql);
    session_unset();
    session_destroy();
    header("Location: index2.php");
?>