<?php
if(isset($_POST['enviar']))
    echo $_POST['nome'];
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
        <?php if(isset($_GET['id'])) { 
            echo $_GET['id'];
        } //echo $nome = $_GET['id'] ?? '';
        ?>  
        </h1>
        <form action="" method="post">
	        <input type="text" name="nome" value="" /><br />
	        <input type="submit" name="enviar" value="Enviar" />
            <input type="submit" name="excluir" value="Excluir" />
        </form>
        <ul>
            <?php for ($i=0; $i < 10; $i++): ?> 
            <li><?=$i?></li>
            <?php endfor; ?>
        </ul>
    </body>
</html>