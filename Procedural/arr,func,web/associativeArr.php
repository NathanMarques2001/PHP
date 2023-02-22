<?php

$conta1 = [
    'name' => 'Vinicius',
    'salary' => 1000,
];
$conta2 = [
    'name' => 'Maria',
    'salary' => 10000,
];
$conta3 = [
    'name' => 'Alberto',
    'salary' => 300,
];

$accounts = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($accounts); $i++) {
    echo $accounts[$i]['name'] . PHP_EOL;
}
