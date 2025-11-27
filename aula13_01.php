<?php
if (session_status() == PHP_SESSION_NONE) { session_start(); } 

include "aula13_menu.php";

// Salvando informações do usuário na sessão
$_SESSION['usuario'] = 'joao';
$_SESSION['email'] = 'joao@email.com';

echo 'Dados da sessão armazenados!';
?>
<h2>aula13_01</h2>