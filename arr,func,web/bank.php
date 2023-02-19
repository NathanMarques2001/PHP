<?php

require_once 'functions.php';

$accounts = [
    '123.456.789-10' => [
        'name' => 'Vinicius',
        'balance' => 1000,
    ],
    '987.654.321-10' => [
        'name' => 'Maria',
        'balance' => 10000,
    ],
    '546.372.819-10' => [
        'name' => 'Alberto',
        'balance' => 300,
    ],
];

$accounts['123.258.265-10'] = [
    'name' => 'Jaber',
    'balance' => 1200,
];

$accounts['123.456.789-10'] = deposit($accounts['123.456.789-10'], 500);
$accounts['123.456.789-10'] = withdraw($accounts['123.456.789-10'], 900);
$accounts['123.456.789-10'] = deposit($accounts['123.456.789-10'], -500);
$accounts['123.456.789-10'] = withdraw($accounts['123.456.789-10'], -900);

foreach ($accounts as $key => $value) {
    echo "CPF: {$key}" . PHP_EOL;
    echo "Nome: {$value['name']} - Salario: {$value['balance']}" .
        PHP_EOL .
        PHP_EOL;
}
