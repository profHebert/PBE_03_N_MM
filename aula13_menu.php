<?php
if (session_status() == PHP_SESSION_NONE) { session_start(); } 

if(count($_SESSION)==0){
    echo "Por favor, acesse o link: <a href='aula13_01.php'>Aula13_01</a>";
    exit;
}

?>
<div>
    <a href="aula13_01.php">Aula13_01</a> | 
    <a href="aula13_02.php">Aula13_02</a> | 
    <a href="aula13_03.php">Aula13_03</a> | 
    <a href="aula13_04.php">Aula13_04</a> | 
    <a href="aula13_destroy.php">Aula13_destroy</a> | 
</div>