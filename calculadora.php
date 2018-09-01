#!/usr/bin/php
<?php

# LER NÚMERO DIGITADO PELO USUÁRIO #

// $num1 = readLine('Digite um número: ');
// $num2 = readLine('Digite outro número: ');

// echo $num1 * $num2;

# LER NÚMERO DIGITADO NO NOME DO ARQUIVO #
# CALCULADORA UTILIZANDO IF/ELSE #

$n1     = $argv[1];
$sinal  = $argv[2];
$n2     = $argv[3];

if ($sinal == '+') {
    echo $n1 + $n2;
}
elseif ($sinal == '-' ) {
    echo $n1 - $n2;
}
elseif ($sinal == '*' ) {
    echo $n1 * $n2;
}
elseif ($sinal == '/') {
    if ($n2 == 0)
        echo 'Impossível dividir por zero';
    else  
        echo $n1 / $n2;   
}
else{
    echo 'Não é um operador matemático.';
}

exit;

# CALCULADORA UTILIZANDO SWITCH CASE #

switch($sinal) {
    case '+':
        echo $n1 + $n2;
        break;
    case '-':
        echo $n1 - $n2;
        break;
    case '*':
        echo $n1 * $n2;
        break;
    case '/':
        if ($n2 == 0)
            echo 'Impossível dividir por zero';
        else
            echo $n1 / $n2;
        break;
    default:
        echo 'Não é um operador matemático';
}