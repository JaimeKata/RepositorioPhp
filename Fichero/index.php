<!DOCTYPE html>
<?php
if (isset($_POST["submit"])) {
    $fichero = $_FILES["fichero"];
    var_dump($fichero);
    $tipo = $fichero["type"];
    var_dump($tipo);
    $tipo = explode("/", $tipo);
    var_dump($tipo);
    switch ($tipo[0]) {
        case "text":
            $destino = "./ficheros/texto/";
            break;
        case "audio":
            $destino = "./fichero/musica";
            break;
        case "imagenes":
            $destino = "./ficheros/imagenes/";
            break;
        default:
            $destino = "./ficheros/otros/";
    }


    $origen = $fichero["tmp_name"];
    $destino = "./ficheros/" . $fichero["name"];
    move_uploaded_file($origen, $destino);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset style="width: 40%">
            <legend>Selecciona el fichero que desea subir</legend>
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="fichero">
                <br />
                <input type="submit" value="Enviar" name="submit">
            </form>
        </fieldset>
    </body>
</html>
