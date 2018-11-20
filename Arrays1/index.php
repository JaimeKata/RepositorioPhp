<?php
for ($n = 0; $n < 10; $n++) {
    $notas[] = rand(1, 10);
}
echo "<h2>Visualizando con var_dump</h2>";
var_dump($notas);
echo "<h2>Visualizando con print</h2>";
print_r($notas);
$min = $notas[0];
$max = $notas[10];
for ($n = 0; $n < 10; $n ++) {
    if ($n < $min) {
        $min = $n;
    }
    if ($n > $max) {
        $max = $n;
    }
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
        <?php
        echo $min;
        echo $max;
        ?>
    </body>
</html>
