<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula08_01</title>
</head>
<body>
    <h1>Aula08_01 - 25/09/25</h1>
    <h2>Relacionais</h2>
    <?php
    $a="10";//10 string
    $b="10";//10 string
    echo "Igualdade = ".($a==$b)."<br>";//1
    echo "Idêntico = ".($a===$b)."<br>";//1 
    echo "Não igual = ".($a!=$b)."<br>";// 
    echo "Não Idêntico = ".($a!==$b)."<br>";//
    $a=10;
    $b=10;
    $c=11;
    echo "Menor: ".($a<$b)."<br>";//
    echo "Menor ou igual: ".($a<=$b)."<br>";//1
    echo "Maior: ".($c>$b)."<br>";//1
    echo "Maior ou igual: ".($c>=$b)."<br>";//1
    /*
    =   atribuir/receber
    ==  iguais
    === identicos
    */
    ?>
    <h2>Lógicos</h2>
    <?php
    $a=50;
    $b=120;
    $c= ($a<=$b);//true//verd
    $d= !($a<=$b);//false//falso
    var_dump($c);//
    echo "<br>";
    var_dump($d);
    $e=(($a<=$b) && !($a>=200));//true
    echo "<br>";
    var_dump($e);//
    echo "<br>";
    $f=(!($a<=$b) || ($a>=200));//false
    echo "<br>";
    var_dump($f);//
    echo "<br>";
    $g=(($a<=$b) xor ($a>=200));//
    echo "<br>";
    var_dump($g);//
    ?>
    <h2>Ternário</h2>
    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=!($a<=$b) ? "Verdadeiro" : "Falso";
    $e=!($a>=$c) ? "Verdadeiro" : "Falso";
    echo "d = $d<br>e = $e";
    ?>
</body>
</html>