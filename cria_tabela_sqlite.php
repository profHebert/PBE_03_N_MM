<?php
require_once 'config.php';
require_once 'conecta.php';

if (DB_TYPE !== 'sqlite') { die("Este script é apenas para SQLite. Altere DB_TYPE em config.php."); }

$query = "CREATE TABLE IF NOT EXISTS USER(
id_user INTEGER not null primary key autoincrement, 
email TEXT not null UNIQUE, 
senha TEXT not null, 
data DATE)";
$pdo->exec($query);
echo "Tabela USER (SQLite) criada/verificada com sucesso (campo **email UNIQUE**)!";

$pdo = null;
?>