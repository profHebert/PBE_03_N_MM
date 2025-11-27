<?php
if (session_status() == PHP_SESSION_NONE) { session_start(); } 

// Salvando informações do usuário na sessão
$_SESSION['usuario'] = 'joao';
$_SESSION['email'] = 'joao@email.com';

echo 'Dados da sessão armazenados!';
?>
<h2>aula13_01</h2>