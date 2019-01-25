<?php
spl_autoload_register(function($clase) {//autocarga la clase 
    require_once "$clase.php";//comillas simples no interpretan variables, dobles si
});
session_start();
if (isset($_POST["acceder"])) {
    $_SESSION["conexion"]["host"] = filter_input(INPUT_POST, "host"); //recojo el dato almacenado en host
    $_SESSION["conexion"]["user"] = filter_input(INPUT_POST, "usuario"); //recojo el dato almacenado en usuario
    $_SESSION["conexion"]["pass"] = filter_input(INPUT_POST, "pass"); //recojo el dato almacenado en password
}
$conexion = $_SESSION["conexion"];
$db = new BD($conexion);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>AccesoBD</title>
        <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
        <meta charset="UTF-8">
    </head>
    <body>
        <fieldset>
            <legend>Acceso</legend>
            <form action="." method="POST">
                <label for="host">Host</label>
                <input type="text" name="host" value="">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" value="">
                <label for="pass">Password</label>
                <input type="text" name="pass" value="">
                <input type="submit" value="Acceder" name="acceder">
            </form>
        </fieldset>

        <?php
        if ($db->conectado()):
            //Devuelve un array con los nombres de las bases de datos
            $baseDDatos = $db->selecionarBasesDatos();
            ?>
            <fieldset>
                <legend>Gestion de las Bases de Datos del host <span class="resaltar"><?php echo $db->getHost(); ?></span></legend>
                <form action="tablas.php" method="POST">
                    <?php
                    foreach ($baseDDatos as $bbdd) {
                        echo "<input type=radio value=$bbdd name=bbdd>";
                        echo "<label for=bbdd>$bbdd</label><br />";
                    }

                    $db->cerrarDB();
                    ?>
                    <input type="submit" value="Gestionar">
                </form>
            </fieldset>
        <?php endif ?>
    </body>
</html>
