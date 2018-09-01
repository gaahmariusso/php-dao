<?php

# ARRAY COM FOREACH #

$arrays = [
    [0, 'Pedro', 'pedro@hotmail.com'],
    [1, 'Gui', 'gui@hotmail.com'],
    [2, 'Tufas', 'tufas@hotmail.com']
];
$lenght = count($arrays);

echo "ID:\tNOME:\tEMAIL:\n";

foreach ($arrays as $usuario)  {
    foreach ($usuario as $u) {
        echo $u."\t";
    }
echo PHP_EOL;
}

die;

# ARRAY COM FOR #

$arrays = [
            [0, 'Pedro', 'pedro@hotmail.com'],
            [1, 'Gui', 'gui@hotmail.com'],
            [2, 'Tufas', 'tufas@hotmail.com']
        ];
$lenght = count($arrays);

echo "ID:\tNOME:\tEMAIL:\n";

for($i = 0; $i < $lenght; $i++) {
    $zlenght = count($arrays[$i]);
    for($k = 0; $k < $zlenght; $k++){
        echo $arrays[$i][$k]."\t";
    }
    echo PHP_EOL;
}

die;

$data = ['id' => 1, 'nome' => 'Pedro', 'email' => 'gabriel_mariusso@hotmail.com']; 

foreach ($data as $k => $value) {
    if ($k == 'email') continue;
    echo "$k -> $value".PHP_EOL;
}

die;

$nomes = ['Gandalf', 'Lêmure', 'Saitama', 'Frodo'];
$nomes[] = 'Pedro';

for ($i = 0; $i < count($nomes); $i++) {
    echo $nomes[$i].PHP_EOL;
}

die;

$nome = readline('Digite um nome: ');

function verPrimeiraLetra($nome){
    if (strtoupper($nome[0]) == 'A')
        echo 'Erro!';
        else {
            echo $nome;
        }
}
verPrimeiraLetra($nome);