<?php
require_once 'config.php';//carrega apenas uma vez o arquivo config.php

$pdo = null; 

try {
    if (DB_TYPE === 'sqlite') {
        $pdo = new PDO('sqlite:' . DATABASE_SQLITE);
    } 
    elseif (DB_TYPE === 'mysql') {
        $dsn = 'mysql:host=' . HOST_MYSQL . ';dbname=' . DBNAME_MYSQL . ';charset=utf8mb4';
        $pdo = new PDO($dsn, USER_MYSQL, PASS_MYSQL);
    } 
    else {
        throw new Exception("Tipo de banco de dados não suportado em config.php");
    }

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} 
catch (PDOException $e) {
    die("ERRO DE CONEXÃO: " . $e->getMessage());
} 
catch (Exception $e) {
    die("ERRO DE CONFIGURAÇÃO: " . $e->getMessage());
}
?>