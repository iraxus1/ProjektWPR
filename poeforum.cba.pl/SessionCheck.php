<body>
<?php 
require_once("top.php");
require_once("dbconnect2.php");
require_once("NotLogged.php"); 
?>
</body>
<div class="styl_1">
        <div class="przerwa">
            <div class="przerwa2"><?php echo "<a style='color:green;justify-content: center;'>Witaj, ".$_SESSION['user']."!</a>"; ?></div>
        </div>
        <div class="styl_2">
            </form>
            <form action="usun_uzt.php" method="POST">
                <input type="submit" value="Usun Konto" class="btn">
            </form>
        </div>
    </div>