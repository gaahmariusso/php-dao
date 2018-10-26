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
// $usuario = new Usuario();
// $usuario->login("userGab", "fiodeouro");
// echo $usuario;

//Criando um novo usuário
// $aluno = new Usuario("Jose", "bunda");
// $aluno->insert();
// echo $aluno;

//Alterando um usuário
// $usuario = new Usuario();
// $usuario->loadById(9);
// $usuario->update("professor", "$%&*");
// echo $usuario;

//Deletando um usuário
$usuario = new Usuario();
$usuario->loadById(10);
$usuario->delete();
echo $usuario;