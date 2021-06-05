<body><?php require_once("top.php"); ?></body>
<?php
    if (isset($_SESSION['zalogowany']))
        header('Location: SessionCheck.php');
    $_SESSION["zmienna"] = "wasrttsd";
    if(isset($_SESSION['blad'])){
        echo $_SESSION['blad'];
        unset($_SESSION['blad']);
    }
?>
<div class="styl_1">
        <div class="styl_2" style='justify-content: center;display: flex;flex-direction: column;'>
            <form action="register.php" id="select1" method="post" style='display: flex;flex-direction: column;text-align: center;'>
                <a>Login: </a><input name="Rlogin" required style='width:300px;height:40px;font-size:30px;margin-left: auto;margin-right: auto;'>
                <a>Hasło: </a><input type="password" name="Rhaslo" required style='width:300px;height:40px;font-size:30px;margin-left: auto;margin-right: auto;'>
                <a>Hasło: </a><input type="password" name="Rhaslo2" required style='width:300px;height:40px;font-size:30px;margin-left: auto;margin-right: auto;'>
                <input type="submit" value="Rejestracja" class="btn">
            </form>
        </div>
    </div>