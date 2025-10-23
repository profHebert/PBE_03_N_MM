<?php
// Define o tipo de banco de dados a ser usado: 'sqlite' ou 'mysql'
define('DB_TYPE', 'sqlite'); // Altere para 'mysql' para usar o MySQL

// Config para SQLite
if (DB_TYPE === 'sqlite') {
    define("DATABASE_SQLITE", "database.sqlite3");
} 
// Config para Mysql
elseif (DB_TYPE === 'mysql') { 
    define("USER_MYSQL", "root");
    define("PASS_MYSQL", "");
    define("DBNAME_MYSQL", "test");
    define("HOST_MYSQL", "localhost");
} 
else {
     die("SGBD não definido! <b>" . DB_TYPE."</b>");
 }
?>