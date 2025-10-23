<?php
require_once 'config.php';
require_once 'header.php'; 
?>

<h1>Banco de Dados - PHP PDO (CRUD)</h1>
<p>Utilize o menu acima para navegar nas operações.</p>

<h2>Ações de Configuração e Inicialização</h2>
<p>Execute estes scripts para preparar o ambiente:</p>
<ul>
    <li><a href='cria_tabela_sqlite.php' target='_blank'>Criar Tabela - SQLite</a></li>
    <li><a href='cria_tabela_mysql.php' target='_blank'>Criar Tabela - MySQL</a></li>
</ul>

<h2>Status Atual da Conexão</h2>
<?php 
try {
    // Tenta conectar para mostrar o status
    require_once 'conecta.php';
    echo "<p style='color: green;'>Conexão bem-sucedida! Banco de Dados: **" . strtoupper(DB_TYPE) . "**</p>";
} catch (Exception $e) {
    echo "<p style='color: red;'>Falha na Conexão: " . htmlspecialchars($e->getMessage()) . "</p>";
}
?>

<?php require_once 'footer.php'; ?>