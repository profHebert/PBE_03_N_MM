<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula12_01</title>
</head>
<body>
    <h1>Aula12_01 - 06/10/25</h1>
    <?php
    //$cores=array("blue","red","green");
    //        0      1      2
    $cores=["blue","red","green","yellow","gray","orange","pink"];
    echo "Quantidade: ".count($cores);
    sort($cores);
    for($i=0;$i<count($cores);$i++){
        //lightred
        //darkred
        echo "<p style='background:$cores[$i]'>$cores[$i]</p>";
    }
    //Dica: style color
    // echo "<p>$cores[1]</p>";
    // echo "<p>$cores[2]</p>";
    // echo "<p>$cores[3]</p>";
    $produto=["id"=>1,"nome"=>"caderno","valor"=>30.55 ];
    foreach($produto as $pos=>$valor){
        echo "$pos: $valor<br>";
    }
    //echo $produto["nome"];
    $produtos=[
        ["id"=>1,"nome"=>"caderno","valor"=>30.55 ],
        ["id"=>2,"nome"=>"lapis","valor"=>2.35 ],
        ["id"=>3,"nome"=>"borracha","valor"=>0.55 ]
    ];
    foreach($produtos as $linha){
        echo $linha["id"]."<br>";
        echo $linha["nome"]."<br>";
        echo $linha["valor"]."<hr>";
    }
    // echo $produtos[0]["id"]."<br>";
    // echo $produtos[0]["nome"]."<br>";
    // echo $produtos[0]["valor"]."<hr>";
    ?>
</body>
</html>