<?php
require_once 'config.php';
require_once 'conecta.php';
require_once 'header.php';

// A mensagem de feedback (GET) será exibida automaticamente pelo header.php

$query = "SELECT id_user, email, data FROM user ORDER BY id_user DESC";
$stmt = $pdo->prepare($query);
$stmt->execute();

$registros = $stmt->fetchAll();

echo "<h1>Lista de Usuários Cadastrados</h1>";

if (count($registros) > 0) {
    echo "<table border='1' cellpadding='10' cellspacing='0' style='width: 100%;'>";
    echo "<thead><tr><th>ID</th><th>Email</th><th>Data de Cadastro</th></tr></thead>";
    echo "<tbody>";

    foreach($registros as $user) {
        echo "<tr>";
        echo "<td style='text-align:center'>" . htmlspecialchars($user['id_user']) . "</td>";
        echo "<td>" . htmlspecialchars($user['email']) . "</td>";
        echo "<td style='text-align:center'>" . htmlspecialchars($user['data']) . "</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<p>Nenhum usuário cadastrado. Que tal <a href='cadastro.php'>adicionar um</a>?</p>";
}

$stmt = null;
$pdo = null;

require_once 'footer.php';
?>