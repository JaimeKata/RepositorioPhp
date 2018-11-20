<?php
$imagenes = array("http://www.tecn.upf.es/~ocelma/cpom/practicas/php/random_images/discography/a_piece_for_the_wicked_vol_1.jpg",
    "http://www.tecn.upf.es/~ocelma/cpom/practicas/php/random_images/discography/double_t.jpg",
    "http://www.tecn.upf.es/~ocelma/cpom/practicas/php/random_images/discography/flagrantly_yours.jpg",
    "http://www.tecn.upf.es/~ocelma/cpom/practicas/php/random_images/discography/gothic.jpg",
    "http://www.tecn.upf.es/~ocelma/cpom/practicas/php/random_images/discography/iliad_of_a_wolverhampton_wanderer.jpg",
    "http://www.tecn.upf.es/~ocelma/cpom/practicas/php/random_images/discography/libertine.jpg",
    "http://www.tecn.upf.es/~ocelma/cpom/practicas/php/random_images/discography/lullabies_for_tough_guys.jpg",
    "http://www.tecn.upf.es/~ocelma/cpom/practicas/php/random_images/discography/nocturnal_nomad.jpg",
    "http://www.tecn.upf.es/~ocelma/cpom/practicas/php/random_images/discography/the_idle_gait_of_the_self_possessed.gif",
    "http://www.tecn.upf.es/~ocelma/cpom/practicas/php/random_images/discography/the_life_and_times_of_a_ballad_monger.jpg");
$img1 = 20;
$img2 = 20;
$img3 = 20;
/* /
  function generarNumero(){
  $indice = rand(0, (count($indice)-1));
  return $indice;
  }

  $img1 = generarNumero();
  $img2 = generarNumero();
  if($img2 == $img1){
  $img2 = generarNumero();
  }else{
  $img3 = generarNumero();
  }
  if($img3 == $img2 || $img3 == $img2){
  $img3 = generarNumero();
  }
  / */

//hacer con un do while que se repita meintras los valores sean iguales


$indices = [];
$indicea = array_rand($imagenes, 3); // recupera 3 valores del array sin repetecion
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
        <META HTTP-EQUIV=Refresh CONTENT="5; URL=vuestra_pagina.php">
        <title></title>
    </head>
    <body>

        <?php
        $i1 = $indices[0];
        $i2 = $indices[1];
        $i3 = $indices[2];
        echo "<td><img src='$imagenes[$i1]'></td>";
        echo "<td><img src='$imagenes[$i2]'></td>";
        echo "<td><img src='$imagenes[$i3]'></td>";
        ?>
    </body>
</html>
