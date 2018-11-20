<?php
$idioma = "castellano";
$checked_f = null;
$checked_i = null;
$checked_c = null;
if ($_POST['submit']) {

    $idioma = $_POST[idioma];
}

switch ($idioma) {
    case 'frances':
        echo "Francies";
        $titulo_idioma = "Selectionnez la langue";
        $titulo_datos = "Accéder aux données";
        $idioma_f = "Français";
        $idioma_e = "Espagnol";
        $idioma_i = "Anglais";
        $user = "Entrez votre nom: ";
        $submit_datos = "Accès";
        $submit_idioma = "Sélectioner";
        $checked_f = "checked";


        break;
    case 'ingles':
        $titulo_idioma = "Select a Language";
        $titulo_datos = "Access data";
        $idioma_f = "France";
        $idioma_e = "Spain";
        $idioma_i = "English";
        $user = "Enter your name: ";
        $submit_datos = "Access";
        $submit_idioma = "Select";
        $checked_i = "checked";
        break;
    case 'castellano':
        $titulo_idioma = "Selecciona el idioma";
        $titulo_datos = "Datos de acceso";
        $idioma_f = "Francés";
        $idioma_e = "Español";
        $idioma_i = "Inglés";
        $user = "Inserta tu nombre: ";
        $submit_datos = "Acceder";
        $submit_idioma = "Selecionar";
        $checked_c = "checked";
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
        <title>Formulario idiomas</title>
    </head>
    <body>
        <fieldset>
            <form action="index.php" method="post">
                <legend><?php echo $titulo_idioma ?></legend>
                <input type="radio" name="idioma" <?php echo $checked_f ?> value="frances"><?php echo $idioma_f ?><br/>
                <input type="radio" name="idioma" <?php echo $checked_i ?> value="ingles"><?php echo $idioma_i ?><br/>
                <input type="radio" name="idioma" <?php echo $checked_c ?> value="castellano"><?php echo $idioma_e ?><br/>
                <input type="submit" name="submit" value="<?php echo $submit_idioma ?>">
            </form>
        </fieldset>
        <form action="sitio.php" method="post">
            <fieldset>
                <legend><?php echo $titulo_datos ?></legend>
                <?php echo $user ?><input type="text" name="nombre"> <!--para no repetir codigo, muestra en funcion del idioma seleccionado-->
                <input type="submit" value="<?php echo $submit_datos ?>"> <!--cambia el idioma del boton en funcion del idioma seleccionado-->
                <input type="hidden" name=idioma value="<?php echo $idioma ?>">
            </fieldset>
        </form>
    </body>
</html>
