<?php

    if($_POST){

        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];

        if($valorA > $valorB){
            echo "el valor de a es mayor que el valor b";
        }
        echo "el valor de a es menor que el valor b";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores aritmeticos</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
        ValorA:
        <input type="text" name="valorA">
        <br/>
        valorB:
        <input type="text" name="valorB">
        <br/>
        <button type="sudmit">calcular</button>
    </form>
</body>
</html>