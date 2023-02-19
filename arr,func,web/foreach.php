<?php

$accounts = [
    '123.456.789-10' => [
        'name' => 'Vinicius',
        'salary' => 1000,
    ],
    '987.654.321-10' => [
        'name' => 'Maria',
        'salary' => 10000,
    ],
    '546.372.819-10' => [
        'name' => 'Alberto',
        'salary' => 300,
    ],
];

$accounts['123.258.265-10'] = [
    'name' => 'Jaber',
    'salary' => 1200,
];

foreach ($accounts as $key => $value) {
    echo "CPF: {$key}" . PHP_EOL;
    echo "Nome: {$value['name']} - Salario: {$value['salary']}" .
        PHP_EOL .
        PHP_EOL;
}
