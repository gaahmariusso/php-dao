<?php

- TIPOS BÁSICOS

$nome = "Hcode";
$site = 'www.google.com.br';

$ano = 1992;
$salario = 7000.00;
$bloqueado = false;

//////////////////////////////////

- TIPOS COMPOSTOS

- Array

$frutas = array("melancia", "manga", "abacaxi");

echo $frutas[2];

- Objeto

$nascimento = new DataTime(); //nativa

var_dump($nascimento);

//////////////////////////////////

- TIPOS ESPECIAIS

$arquivo = fopen("variaveis.php", "r");

var_dump($arquivo);

$nulo = NULL;