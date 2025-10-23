<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula10_01</title>
</head>
<body>
    <h1>Aula10_01 - 23/10/25</h1>
<?php
echo "<h2>While</h2>";
$i=0;
while($i<5){
    echo "$i ";
    $i++;
}
echo "<hr>";
/*
1) Qual a saída? 0 1 2 3 4
2) Qual o valor inicial?0
3) Qual a condição?$i<5
4) Qual o contador?$i++
5) Quantas vezes o looping foi executado?5
6) Qual o valor que tornou a condição falsa?5
*/
$i=13;
while($i<17){
    echo "$i ";
    $i++;
}
echo "<hr>";
/*
1) 13 14 15 16
2) 13
3) $i<17 ou $i<=16
4) $i++
5) 4
6) 17
*/
$i=5;
while($i>0){
    echo "$i ";
    $i--;
}
echo "<hr>";
/*
1) 5 4 3 2 1
2) 5
3) $i>0 ou $i>=1
4) $i--
5) 5
6) 0
*/
$i=0;
while($i<=10){
    echo "$i ";
    //$i++;//$i=$i+1//$i+=1
    $i+=2;
}
echo "<hr>";
/*
1) 0 2 4 6 8 10
2) 0
3) $i<=10 ou $i<12
4) $i+=2
5) 6
6) 12
*/
echo "<h2>Do While</h2>";
$i=7;
do{
    echo "$i ";
    $i++;
}while($i<5);
echo "<h2>For</h2>";
for($i=5;$i<25;$i+=5){ echo "$i ";}    
echo "<h2>Instrução For (aninhada)</h2>";

for ($i=1; $i<4; $i++) {//ext
  for ($j=5; $j<7; $j++) {//int
    echo "$i $j<br>";
  }
}
/*
i j
0 0
0 1
0 2
1 0
1 1
1 2

1 5
1 6
2 5
2 6
3 5
3 6



*/
?>
</body>
</html>