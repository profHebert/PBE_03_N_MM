<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: cadastro.php");
    exit;
}

$email = trim($_POST["email"] ?? '');
$senha_pura = $_POST["senha"] ?? '';
$data = $_POST["data"] ?? '';


if (empty($email) || empty($senha_pura) || empty($data)) {
    // Redireciona para o formulário com mensagem de erro GET
    $msg = urlencode("Por favor, preencha todos os campos do formulário.");
    header("Location: cadastro.php?status=error&msg={$msg}");
    exit;
}

$senha_hash = password_hash($senha_pura, PASSWORD_DEFAULT);

require_once 'conecta.php';

$query = "INSERT INTO user (email, senha, data) VALUES (:email, :senha, :data)";

try {
    $stmt = $pdo->prepare($query);

    // BindValues: Prevenção contra SQL Injection
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':senha', $senha_hash);
    $stmt->bindValue(':data', $data);

    $stmt->execute();
    
    // Sucesso: Redireciona para 'seleciona.php' com mensagem GET
    $msg = urlencode("Usuário **" . htmlspecialchars($email) . "** cadastrado com sucesso! ID: " . $pdo->lastInsertId());
    header("Location: seleciona.php?status=success&msg={$msg}");
    exit;

} catch (PDOException $e) {
    // Erro de BD: Redireciona para 'index.php' com mensagem GET
    if ($e->getCode() === '23000') { 
        // Erro de chave única (email duplicado)
        $msg = urlencode("O email '**" . htmlspecialchars($email) . "**' já está cadastrado. Tente outro.");
    } else {
        $msg = urlencode("Erro de BD: " . $e->getMessage());
    }
    header("Location: index.php?status=error&msg={$msg}");
    exit;
}
?>