<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Site em PHP</title>
        <style>
            html {
                font-family: sans-serif;
                font-size: 2em;
            }
        </style>
    </head>
    <body>
        <h1>
            Site em PHP! 
        </h1>
        <h2>Área restrita!</h2>
        <?php echo 'Bem vindo ', $_SESSION['sessao']['email']; ?>
    </body>
</html>