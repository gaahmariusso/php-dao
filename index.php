<?php

require_once("config.php");

// Carrega um usuário
// $root = new Usuario();
// $root->loadById(2);
// echo $root;

// Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("o");
// echo json_encode($search);

// Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "12345");
echo $usuario;