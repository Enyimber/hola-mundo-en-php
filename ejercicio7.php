<?php

    if($_POST){

        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];

        $suma= $valorA + $valorB;
        $resta= $valorA - $valorB;
        $multiplicacion= $valorA * $valorB;
        $divicion= $valorA / $valorB;
        
        echo "<br/>".$suma;
        echo "<br/>".$resta;
        echo "<br/>".$multiplicacion;
        echo "<br/>".$divicion;
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
    <form action="ejercicio7.php" method="post">
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