<head>
    <meta charset="utf-8">
    <title>POEForum.pl</title>
    <link rel="stylesheet" href="css/plik.css">
    <link rel="stylesheet" href="css/plik2.css">
</head>
<div class="top1">
            <div class="upleft" style=" width: 5%;"><img src="currency/Path_of_Exile_Logo.png" class="image" style=" width: 63px; height:80px"></div>
            <div class="upleft"><form method="get" action="index.php" class="but2"><button type="submit" class="but1" style="text-align: center;width: 124px;height: 60px;font-size: 30px;font-family: Open Sans;">Strona Główna</button></form></div>
            <div class="upright">
                <div class="upright2">
                    <form method="get" action="currency.php" class="but2"><button type="submit" class="but1" style="text-align: center;width: 74px;height: 60px;font-size: 30px;font-family: Open Sans;">Currency</button></form><span style="width: 15px;height: 32px"></span>
                    <form method="get" action="builds.php" class="but2"><button type="submit" class="but1" style="text-align: center;width: 74px;height: 60px;font-size: 30px;font-family: Open Sans;">Builds</button></form><span style="width: 15px;height: 32px"></span>
                    
                    <?php
                    session_start();
                    if(isset($_SESSION["zalogowany"])&&$_SESSION["zalogowany"]==TRUE){
                        echo '<form method="get" action="logout.php" class="but2"><button type="submit" class="but1" style="text-align: center;width: 74px;height: 60px;font-size: 30px;font-family: Open Sans;">Wyloguj</button></form>';
                        echo '<form method="get" action="forum.php" class="but2"><button type="submit" class="but1" style="text-align: center;width: 74px;height: 60px;font-size: 30px;font-family: Open Sans;">Forum</button></form>';
                    }else{
                        echo '<form method="get" action="index2.php" class="but2"><button type="submit" class="but1" style="text-align: center;width: 74px;height: 60px;font-size: 30px;font-family: Open Sans;">Logowanie</button></form>';
                    }
                    ?>
                    <form method="get" action="SessionCheck.php" class="but2"><button type="submit" class="but1" style="text-align: center;width: 74px;height: 60px;font-size: 30px;font-family: Open Sans;">Konto</button></form><span style="width: 15px;height: 32px"></span>
                </div>
            </div>
        </div>