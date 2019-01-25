<?php
spl_autoload_register(function($clase) {//autocarga la clase 
    require_once '$clase.php';
});
session_start();
$conexion = $_SESSION["conexion"];//inicio conexion
$baseDatos = filter_input(INPUT_POST, "bbdd");//recupero la base de datos (solo recupero el nombre) seleccionada en index
$bd = new BD($conexion);//guardo los datos de la bd para poder usar las funciones
//IMPLEMENTAR funcion que diga cual es la bd haciendo un select y pasandole el nombre de la BD que vamos a usar
$consulta = "Show tables from $baseDatos";//preparo la consulta para sacar las tablas de la base de datos seleccionada
$tablas = $bd->select($consulta);//realizo la consulta
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
        <title>Tablas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
    </head>
    <body>
        <fieldset>
            <legend>Listado de las bases de datos</legend>
            <form action="index.php" method="POST">
                <input type="submit" value="Volver" name="volver">
            </form>
        </fieldset>
        <fieldset>
            <legend>Gestionar la BD</legend>
            <?php 
            echo "<form action='Editar.php' method ='POST'>";
            foreach ($tablas as $tabla){
                echo "<input type='submit' value='$tabla[0]' name='tabla'>";
            }
            ?>
        </fieldset>
    </body>
</html>
