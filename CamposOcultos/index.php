<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<?php
        if(isset($_POST["enviar"])){
            $clicks++; 
            $msj = "Has hecho $clicks clicks";
        }else{
            $msj = "Solo por url";
        }
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h1><?php echo $msj ?></h1>
        <form action
    </body>
</html>
