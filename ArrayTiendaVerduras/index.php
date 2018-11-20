<?php
$productos = [
    'lechuga' => ['unidades' => 200,
        'precio' => 0.90],
    'tomates' => ['unidades' => 2000,
        'precio' => 2.15],
    'cebollas' => ['unidades' => 3200,
        'precio' => 0.49],
    'fresas' => ['unidades' => 4800,
        'precio' => 4.50],
    'manzanas' => ['unidades' => 2500,
        'precio' => 2.10]];


if (isset($_POST['comprar'])) {
    //preparar la facutura compra, actualizar array
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
        <form action="tienda.php" method="POST">
            Lechugas <input type="text" name="lechuga" id=""><br />
            Tomates <input type="text" name="tomate" id=""><br />
            Cebolla <input type="text" name="cebolla" id=""><br />
            Fresas <input type="text" name="fresa" id=""><br />
            Manzanas <input type="text" name="manzama" id=""><br />
            <input type="submit" value="comprar" name="">

        </form>
    </body>
</html>
