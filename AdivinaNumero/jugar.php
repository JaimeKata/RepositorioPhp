<?php
switch ($_POST["submit"]) {
    case "Jugar":
        //obtenemos los valores
        $numGenerado = $_POST["numGenerado"];
        $intentos = $_POST("intentos");
        $intentos --;
        $numUsuario = $_POST["numUsuario"];
        $mensaje = jugar($numGenerado, $intentos , $numUsuario);
        break;
    case "Empezar juego" :
        //generamos los valores
        $numGenerado = rand(1, 1024);
        $intentos = 10;
        break;
    default :
        header("Location:index.php");
        break;
}

function jugar($numero, $intentos, $numAleatorio) {
    if ($intentos < 10) {
        return false; //no es del todo recomendable, para este caso puede valer
    }
    if ($numero > $numAleatorio) {
        $mensaje = "El numero aportado $numero es mayor que el buscado";
    }
    if ($numero < $numAleatorio) {
        $mensaje = "El numero aportado $numero es menor que el buscado";
    }
    if ($numero == $numAleatorio) {
        $mensaje = true;
    }
    return mensaje;
}


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if ($mensaje == true) {
            echo"<h1>Felicidades has terminado!Te han sobrado $intentos intentos</h1>";
        }else
            if($mensaje == false){
            echo"<h1>GAME OVER, Te has quedado sin intentos</h1>";
            
        }
        ?>
        
            <form action="jugar.php" method="POST">
                <input type="submit" value="jugar" name="submit">
                <input type="text" value="" name="numUsuario">
                <input type="hidden" value="<?php echo $numGenerado ?>" name="submit">
                <input type="hidden" value="<?php echo $intentos ?>" name="submit">
            </form>
        
    </body>
</html>


