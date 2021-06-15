<html>
<head>
    <meta charset="utf-8">
    <title>POEForum.pl</title>
    <link rel="stylesheet" href="css/plik.css">
    <link rel="stylesheet" href="css/plik2.css">
</head>
<body>
    <?php require_once("top.php");?>
    <?php
?>
    <body>
        <form action="wyslij.php" method="post">
            <input type="text" name="autor" placeholder="POE nick"/> <br/>
            <textarea name="tresc" placeholder="Treść kometarza"></textarea><br/>
            <input type="submit" value="Wyślij"/>
        </form>
        <hr/>
        <?php
            
            try{
                require_once("dbconnect2.php");
                if($polaczenie->connect_errno != 0){
                    throw new Exception(mysqli_connect_error());
                }
                else{
                    
                    mysqli_query($polaczenie, "SET CHARSET utf8");
                    mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
                    
                    $sprawdz = $polaczenie->query("SELECT * FROM komentarze");
                    
                    if($sprawdz->num_rows > 0){
                        
                        $num = $sprawdz->num_rows+1;

                        for($i = 1; $i < $num; $i ++){
                            
                            if($komentarz = $sprawdz = $polaczenie->query("SELECT * FROM komentarze WHERE id='$i'")){
                                
                                $wiersz = $komentarz->fetch_assoc();
                                echo 
                                '<pre>
                                <span style="color:white">
                                <div class="komentarz">'.
                                $wiersz['autor'].' / '.
                                $wiersz['data'].'
                                <br/>'.$wiersz['tresc'].'
                                </pre>
                                </span>
                                </div>'; 
                            }
                        }
                    }
                    $polaczenie->close();
                }
            }
            catch(Excample $error){
                echo "ERROR!";
            } 
        ?>
    </body>
</html>