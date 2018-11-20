<?php
$base = "/var/www";

//lee todos los ficheros 
$ficheros = scandir($base); // devuelve un array de todos los elementos de la ruta
var_dump($ficheros);

echo"<ol>";
foreach ($ficheros as $indice => $fichero) {
    if ($fichero != "." && $fichero != "..") {
        if (is_dir("$base/$fichero")) {
            if (file_exists("$base/&fichero/index.php")) {
                echo"<h2><a href='/$fichero/index.php'>$fichero</a></h2>";
            }
        }
    }
}
echo "</ol>";
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
        <?php
        // put your code here
        ?>
    </body>
</html>
