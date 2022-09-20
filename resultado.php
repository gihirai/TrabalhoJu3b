<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho 3b</title>
</head>
<body>
<div>
    
    <h1>
        <?php
        $valor1 = $_POST ["valor1"];
        $valor2 = $_POST ["valor2"];
        $valor3 = $_POST ["valor3"];
        if($valor2 < $valor1){
            $temp=$valor1;
            $valor1=$valor2;
            $valor2=$temp;
           }
           
        if($valor3 < $valor1){
            $temp=$valor1;
            $valor1=$valor3;
            $valor3=$temp;
           }
           
        if($valor3 < $valor2){
            $temp=$valor2;
            $valor2=$valor3;
            $valor3=$temp;
           }
        echo "$valor3 < $valor2 < $valor1";
        ?>
    </h1>
    </div>
</body>
</html>