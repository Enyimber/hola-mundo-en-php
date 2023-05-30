<?php

/* Enyimber Ferley Aguilar Carreño
Desarollo web con PHP 
creamos una calculadora en viando los datos por el metodo post 
a un archivo llamado biblioteca.php en la cual hay una funcion 
la cual retorna el resultado  */


    //incluimos el archivo biblioteca.php
     include_once ('biblioteca.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones PHP</title>
</head>

<body>
    <!-- creamos un formulario el cual envia los datos -->
    <form method="post">
        Numero1:
        <input type="number" name="Numero1" id="">
        <br/>
        Numero2:
        <input type="number" name="Numero2" id="">
        <br/>
        Operacion:
        <select name="Operacion" id="">
            <option value="S">Suma</option>ctio
            <option value="R">Resta</option>ctio
            <option value="M">Multiplicacion</option>ctio
            <option value="D">Divicion</option>ctio
        </select>
        <br/>
        <button type="submit">Calcular</button>
        <!-- imprimimos el resultado de la funcion uvucada en biblioteca.php -->
        <?php
        if($_POST){
        echo '<h1>'.operacion();'</h1>';
        }
        ?>
    </form>
</body>

</html>