<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula11_01</title>
</head>
<body>
    <h1>Aula11_01 - 30/10/25</h1>
    <?php
    $x=10;
    $x=7.5;
    $x="teste";
    echo "x=$x<br>";
    //$y=array(10,7.5,"teste");
    //  0   1    2
    $y=[10,7.5,"teste"];
    echo "<br>y=".$y[1];
    print_r($y);
    echo"<br>y[0]=".$y[0];//10
    echo"<br>y[1]=".$y[1];//7.5
    echo"<br>y[2]=".$y[2];//teste
    $y[0]%=2;//0
    $y[1]+=0.5;//8
    $y[2].=", 123";//teste, 123
    echo"<br>y[0]=".$y[0];
    echo"<br>y[1]=".$y[1];
    echo"<br>y[2]=".$y[2];
    echo "<hr>";
    $estudante=[
        "ra"=>1234,
        "nome"=>"Bete",
        "av1"=>8,
        "av2"=>7.5
    ];
    echo "<br>Estudante: ".$estudante[1];
    ?>
</body>
</html>