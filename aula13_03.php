<?php
if (session_status() == PHP_SESSION_NONE) { session_start(); } 

$usuario = $_SESSION['usuario'] ;
$email = $_SESSION['email'] ;

echo "Usuário = $usuario<br>";
echo "E-mail = $email<br>";

?>
<h2>aula13_03</h2>