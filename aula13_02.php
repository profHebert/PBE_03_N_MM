<?php
if (session_status() == PHP_SESSION_NONE) { session_start(); } 

include "aula13_menu.php";

$usuario = $_SESSION['usuario'] ;
$email = $_SESSION['email'] ;

echo "Usuário = $usuario<br>";
echo "E-mail = $email<br>";

?>
<h2>aula13_02</h2>