<?php

$config = parse_ini_file('config.ini');
session_start();
if(isset($_POST['enviar'])) {
    if($_POST['email'] == $config['email'] && $_POST['senha'] == $config['senha']){
        echo "Login realizado com sucesso!";        
        $_SESSION['sessao'] = ['email' => $_POST['email']];
        header('Location: index.php');
        exit;
    }else {
    header('Location: index.php?erro=Usuário ou senha inválidos');
    exit;
    }
}
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
        <?php if(isset($_GET['erro'])) : ''?>
        <p style="color:red">Usuario ou senha inválidos</p>
        <?php endif; ?>
        <form action="" method="post">
	        <input type="text" name="email" value="" /><br />
            <input type="password" name="senha" value="" /><br />
	        <input type="submit" name="enviar" value="Enviar" />
        </form>
    </body>
</html>