<?php
if (isset($_POST['enviar'])) {
    $su = file_get_contents("index.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    </head>
    <body>
        <fieldset>
            <legend>Mostrar codigo</legend>
            <form action="index.php" method="POST">
                <input type="submit" name="enviar">
            </form>
        </fieldset>
        <fieldset>
            <legend>Código</legend>
            <p><?php
                if (!is_null($su)) {
                    //nl2br cambia los newlines por br.
                    //htmlspecialchars no interpreta el código.
                    //echo nl2br(htmlspecialchars($su));

                    echo "<pre class=prettyprint>" . (htmlspecialchars($su)) . "</pre>";
                }
                ?></p>
        </fieldset>
    </body>
</html>
