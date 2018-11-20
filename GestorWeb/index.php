<?php 
    $aCabecera = "Altura cabecera: ";
    $aMenu = "Altura menú: ";
    $anMenu = "Anchura menú: ";
    $anContenido = "Anchura contenido: ";
    $colorFCabecera = "Color fondo cabecera: ";
    $colorFMenu = "Color fondo menú: ";
    $colorFContenido = "Color fondo contenido: ";
    $sizePxTitulo = "Tamaño pixeles titulo: ";
    $titulo= "Titulo: ";
?>
<!-- PAGINA WEB de los ejercicios http://manuel.infenlaces.com/web/index.php?num_practica=9-->


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestor Web</title>
    </head>
    <body>
        <fieldset>
            <form>
                <?php echo $aCabecera ?><input type="text" name="alturaCabecera" id="">
                <br>
                <?php echo $aMenu ?><input type="text" name="alturaMenu" id="">
                <br>
                <?php echo $anMenu ?><input type="text" name="anchuraMenu" id="">
                <br>
                <?php echo $anContenido ?><input type="text" name="anchuraContenido" id="">
                <br>
                <?php echo $colorFCabecera ?><input type="" name="colorFondoCabecera" id="">
                <br>
                <?php echo $colorFMenu ?><input type="checkbox" name="colorFondoMenu" id="">
                <br>
                <?php echo $colorFContenido ?><input type="checkbox" name="colorFondoContenido" id="">
                <br>
                <?php echo $sizePxTitulo ?><input type="text" name="sizePxTitulo" id="">
                <br>
                <?php echo $titulo ?><input type="text" name="titulo" id="">
                <br>
                <input type="submit" name="crear" value="Crear Página">
            </form>
        </fieldset>
    </body>
</html>
