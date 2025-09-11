<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula06_02</title>
</head>
<body>
    <h1>Aula06_02 - 11/09/25</h1>
    <?php
    echo "<pre>";print_r($_REQUEST);echo "</pre>";
    $login=$_POST["login"];
    $senha=$_POST["senha"];
    echo "Login: $login<br>";
    echo "Senha: $senha<br>";
    ?>
</body>
</html>