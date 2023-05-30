<?php
/* creamos la funcion operacion la cual resive los datos del
archivo index.php y los guarda en las variables Numero1 ,
Numero2 y Operaciones despues hace una validacion en la cual
se dara decunta si los campos vienen vacios o traen data 
si estan vacion retorna porfavor ingrese numeros y si tine datos 
corera un switch el cual retornara el resultado sugun lo resivido */

function operacion()
{
            //variables
    $Numero1 = $_POST['Numero1'];
    $Numero2 = $_POST['Numero2'];
    $Operaciones = $_POST['Operacion'];

            //validacion
    if ($Numero1 == "" || $Numero2 == "") {
        return "porfavor ingrese numeros";
    }else{
        switch ($Operaciones) {
            case 'S':
                return $Numero1 + $Numero2;
                break;
            case 'R':
                return $Numero1 - $Numero2;
                break;
            case 'M':
                return $Numero1 * $Numero2;
                break;
            case 'D':
                return $Numero1 / $Numero2;
                break;

            default:
                return "Error";
                break;
        }
    }
}
