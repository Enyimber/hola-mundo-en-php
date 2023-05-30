<?php

    if($_POST){

        $boton = $_POST['btnValor'];

        switch($boton){
            case 1:
                echo "presioeno el boton 1";
            break;
            case 2:
                echo "presioeno el boton 2";
            break;
            case 3:
                echo "presioeno el boton 3";
            break;
        }
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
    <form action="ejercicio10.php" method="post">
        <button type="submit" name="btnValor" value="1">1</button>
        <button type="submit" name="btnValor" value="2">2</button>
        <button type="submit" name="btnValor" value="3">3</button>
    </form>
</body>
</html>