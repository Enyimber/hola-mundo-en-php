<?php
 
    if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];
    // nomenclatura para and = && las dos condiciones tienen que ser verdaderas
    if(($valorA != $valorB) && ($valorA > $valorB)){
        echo "el valorA es mayor a valorB";
    }
      // nomenclatura para or = || uno de los dos valores es verdadero
      if(($valorA != $valorB) && ($valorA > $valorB)){
        echo "el valorA es mayor a valorB";
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
    <form action="ejercicio9.php" method="post">
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