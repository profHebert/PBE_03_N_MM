<?php

// aula 09




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faculdade</title>
</head>
<body>
    <div>
        <form action="#" method="post">
            <input type="number" id="valor" placeholder="1234....">
            <input type="submit">
        </form>
    </div>
    <div>
        <?php 
           if($_POST["valor"]){
            $x = $_POST["valor"];
           }else{
            $x=0;
           }

           echo "$x"
        ?>
    </div>

</body>
</html>


