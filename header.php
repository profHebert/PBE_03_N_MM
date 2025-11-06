<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP PDO CRUD Aula</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background-color: #f4f4f4; }
        
        .nav-menu { 
            background-color: #333; 
            display: flex;
            align-items: center;
        }
        .nav-menu a { 
            color: white; 
            text-align: center; 
            padding: 14px 16px; 
            text-decoration: none; 
        }
        
        .nav-menu a:hover { 
            background-color: #555; 
        }

        .nav-menu a:last-child {
            margin-left: auto; 
        }

        /* Outros estilos permanecem os mesmos */
        .container { margin: 20px; }
        .feedback-success { color: #155724; background-color: #d4edda; border: 1px solid #c3e6cb; padding: 10px; margin-bottom: 20px; border-radius: 5px; }
        .feedback-error { color: #721c24; background-color: #f8d7da; border: 1px solid #f5c6cb; padding: 10px; margin-bottom: 20px; border-radius: 5px; }
    </style>
</head>
<body>

    <div class="nav-menu">
        <a href="index.php">Home/Menu</a>
        <a href="cadastro.php">Cadastrar (Create)</a>
        <a href="seleciona.php">Visualizar (Read)</a>
        <a href="atualiza.php">Atualizar (Update)</a>
        <a href="conecta.php" target="_blank">Testar Conexão</a> 
    </div>
    <div class="container">
    <?php
    // LEITURA DE MENSAGENS VIA GET
    $status = $_GET['status'] ?? '';
    $mensagem = $_GET['msg'] ?? '';

    if (!empty($status)) {
        $class = ($status === 'success') ? 'feedback-success' : 'feedback-error';
        echo "<div class='{$class}'>**" . htmlspecialchars(ucfirst($status)) . ":** " . htmlspecialchars($mensagem) . "</div>";
        // A mensagem é lida, mas não é limpa, pois está na URL.
    }
    ?>
    