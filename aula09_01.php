<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula09_01</title>
</head>
<body>
    <h1>Aula09_01 - 02/10/25</h1>
    <?php
    $idade = 17;

    if ($idade >= 18){
        echo "Você é maior de idade.";
    }
    else{
        echo "Você é menor de idade.";
    }

    $hora =1;

    if ($hora>=0 && $hora<=11) {
        echo "Bom dia!";
    } 
    else if ($hora>=12 && $hora <=18) {
        echo "Boa tarde!";
    } 
    else if($hora>=19 && $hora<=23) {
        echo "Boa noite!";
    }
    else{
        echo "Hora desconhecida!";
    }
    /*

     Bom dia      0  e 11 ($hora>=6 &&  $hora<=11) (inclusive) 6 e 11 inclusive
     Boa tarde    12 e 18
     Boa noite    19 e 23 (12345)
     Desconhecido
    */
    echo "<hr>";
    $idade = 20;
    $mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
    echo $mensagem;
    
    ?>
</body>
</html>