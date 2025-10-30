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
        "id"=>1,
        "ra"=>1234,
        "nome"=>"Bete",
        "av1"=>8,
        "av2"=>7.5
    ];
    /* Mostrar todos os dados do(a) estudante e 
        calcular a media entre av1 e av2*/
        echo "<br>Id: ".$estudante["id"];
        echo "<br>Nome: ".$estudante["nome"];
        echo "<br>Ra: ".$estudante["ra"];
        echo "<br>Av1: ".$estudante["av1"];
        echo "<br>Av2: ".$estudante["av2"];
        $media=($estudante["av1"]+$estudante["av2"])/2;
        echo "<br>Media: $media ";

        $num=[
              [1,2,3],
              [4,5,6],
              [7,8,9]  
        ];
        echo "<br>num =".$num[1][0];
        $naval=[
            ["água","água","submarino","água"],
            ["veleiro","água","água","água"],
            ["água","água","água","avião"],
            ["água","trem","água","água"]
        ];
        // imprimir: veleiro trem submarino avião
        echo "<hr>";
        echo $naval[1][0]." ".$naval[3][1]." ".$naval[0][2]." ".$naval[2][3];

    ?>
</body>
</html>