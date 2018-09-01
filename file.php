<?php

$usuarios = file('usuarios.csv');
$data = strtolower(readline('Digite um nome: '));
$ctrl = false;

foreach ($usuarios as $usuario) {
    list($id, $nome, $email) = explode(',', $usuario);
    if ($data == strtolower($nome)) {
        echo "$id -> $email";
        $ctrl = true;
        break;
    }
}
if ($ctrl == false) {
    echo 'Usuário não encontrado!';
}

exit;

$usuarios = file('usuarios.csv');

foreach ($usuarios as $file) {
    $usuario = explode(',', $file);
    echo $usuario[2];
}

exit;

$usuarios = file('usuarios.csv');

foreach ($usuarios as $k => $file) {
    echo "$k -> $file";
}