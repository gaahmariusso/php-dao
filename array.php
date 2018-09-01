<?php

$arr = array(1,2,3,4,5,6,7,8,9,10);
$arr = [1,2,3,4,5,6,7,8,9,10];
$arr = [26, 'Gabriel', ['Mariusso', 'Finnet', [1,2,3,4]]];
$arr = ['nome' => 'Gabriel', 'idade' => '26'];
$arr['telefone'] = '991595153';

print_r($arr);

// echo $arr[3].PHP_EOL.$arr[5].PHP_EOL.$arr[9];
// printf("Valores:\n%s\n%s\n%s\n", $arr[3], $arr[5], $arr[9]);