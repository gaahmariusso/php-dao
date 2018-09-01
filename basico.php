<?php

define('XLS_PATH', '/home/planilhas');

$xls = 'telefones.';

function duas_vezes() {

    global $xls;

    echo $xls.PHP_EOL;
    echo XLS_PATH.PHP_EOL;
    echo 'Um'.PHP_EOL;
    echo 'Dois'.PHP_EOL;
}

// echo XLS_PATH . "/{$xls}xls\n";
duas_vezes();