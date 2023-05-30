<?php

    if($_POST){

    function operaciones(){
        $numero1=$_POST['numero1'];
        $numero2=$_POST['numero2'];
        $operacion=$_POST['operacion'];

        switch ($operacion) {
            case 's':
                return $numero1 + $numero2;
                break;
            case 'r':
                return $numero1 - $numero2;
                break;
            case 'm':
                 return $numero1 * $numero2;
                break;
            case 'd':
                return $numero1 / $numero2;
                break;
            default:
                return "error";
                break;
        }
        echo operacion();
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="funciones.php" method="post">
            numero1:
            <input type="number" name="numero1" id="">
            <br/>
            numero2:
            <input type="number" name="numero2" id="">
            <br/>
            <select name="operacion">
                <option value="s">suma</option>
                <option value="r">resta</option>
                <option value="m">multiplicacion</option>
                <option value="d">division</option>
            </select>
            <input type="submit" name="enviar" id="">
        </form>
</body>
</html>