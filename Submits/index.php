<?php 
    switch($_POST["submit"]){
        case "Azul":
            $msj = "Has elegido el color azul";
            break; 
        case "Verde" : 
            $msj = "Verde que te quiero verde";
            break; 
        case "Rojo" : 
            $msj = "Has elegido el color rojo";
            break; 
        case "Amarillo" : 
            $msj = "Tengo un tractor amarillo";
            break; 
        default :
            $msj = "No se ha seleccionado ningina opcion";
            break; 
    }

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2><?php echo $msj?></h2>
        <fieldset>
            <form action="index.php" method="POST">
                <h2>Selecciona un color</h2>
                <input type="submit" value="Azul" name="submit">
                <input type="submit" value="Verde" name="submit">
                <input type="submit" value="Rojo" name="submit">
                <input type="submit" value="Amarillo" name="submit">
            </form>
        </fieldset>
    </body>
</html>
