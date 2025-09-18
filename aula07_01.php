<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula07_01</title>
</head>
<body>
    <h1>Aula07_01 - 18/09/25</h1>
    <h2>Aritméticos</h2>
    <?php
    $a=10;
    $b=2;
    echo "Adição:".($a + $b);
    echo "<br>Subtração:".($a - $b);
    echo "<br>Multiplicação:".($a * $b);
    echo "<br>Divisão:".($a / $b);
    echo "<br>Módulo:".($a % $b);
    echo "<br>Exponenciação:".($a ** $b);
    ?>
    <h2>Atribuição</h2>
    <?php
    $a=10;//$a=10
    $b=2;//$b=2
    $a+=$b;//$a=$a+$b//$a=10+2//$a=12
    $b-=5;//$b=2-5//$b=-3
    echo "a = $a";//a = 12
    echo "<br>b = ".$b;//b = -3
    $c=11;//$c=11
    $d=6;//$d=6
    $c%=$d;//$c=11%6//$c=5
    $d+=$a;//$d=6+12//$d=18
    echo "<br>c = ".$c;//c = 5
    echo "<br>d = ".$d;//d = 18
    ?>
    <h2>String</h2>
    <?php
    $a = "Bete ";
    echo "$a <br>";//Bete
    $b = "Maria ";
    echo "$b <br>";//Maria
    echo $a . $b;//Bete Maria
    $b .= $a;//$b=Maria Bete
    $b.= " Pedro";//$b=Maria Bete Pedro
    echo "<br>$b"; //Maria Bete Pedro
    ?>
    <h2>Incremento/Decremento</h2>
    <?php
    $x = 100;
    echo "x = ".$x++;//x = 100
    echo "<br>x final = ".$x;//x final = 101
    echo "<hr>";
    $i=10;
    echo "<br> i = $i";//10
    /*
    $i++;//$i=$i+1//$i+=1
    $i++;//11
    $i++;//12
    ++$i;//13
    ++$i;//14
    */
    $i+=4;
    echo "<br> i = $i";//14
    $i--;//13
    $i--;//12
    --$i;//11
    echo "<br> i = $i";//11
    ?>
</body>
</html>