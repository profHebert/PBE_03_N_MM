<?php

require_once 'config.php';
require_once 'conecta.php';

// Valores de exemplo a serem atualizados
$id_alvo = 1; 
$novo_email = 'novo.admin@exemplo.com';
$nova_senha_pura = 'senha1234';
$nova_data = date('Y-m-d'); 

// Hashing da nova senha
$nova_senha_hash = password_hash($nova_senha_pura, PASSWORD_DEFAULT);

$query = "UPDATE user SET email=:email, senha=:senha, data=:data WHERE id_user=:id_user";
$stmt = $pdo->prepare($query);

// Bind dos valores
$stmt->bindValue(':email', $novo_email);
$stmt->bindValue(':senha', $nova_senha_hash);
$stmt->bindValue(':data', $nova_data);
$stmt->bindValue(':id_user', $id_alvo, PDO::PARAM_INT); 

try {
    $stmt->execute();
    $linhas_afetadas = $stmt->rowCount();

    if ($linhas_afetadas > 0) {
        $msg = urlencode("Usuário ID {$id_alvo} atualizado (Email: {$novo_email}) com sucesso!");
        header("Location: seleciona.php?status=success&msg={$msg}");
    } else {
        $msg = urlencode("Nenhuma linha foi atualizada. O ID {$id_alvo} pode não existir, ou os dados já estavam iguais.");
        header("Location: index.php?status=error&msg={$msg}");
    }

} catch (PDOException $e) {
    if ($e->getCode() === '23000') { 
        $msg = urlencode("Erro ao atualizar: O email '{$novo_email}' já está em uso por outro usuário.");
    } else {
        $msg = urlencode("Erro ao atualizar: " . $e->getMessage());
    }
    header("Location: index.php?status=error&msg={$msg}");
}

$stmt = null;
$pdo = null;
exit;
?>