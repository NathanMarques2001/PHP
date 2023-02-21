<?php

$grades = [
    'Vinicius' => null,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

//testa se esta nulo ou nao
var_dump(isset($grades['Ana']));
var_dump(isset($grades['Vinicius']));

//testa se o valor 7 existe dentro do arra
//true fala par ele usar === ao inves de ==
var_dump(in_array(7, $grades, true));

//busca dentro do array a key que tem o valor 7
echo array_search(7, $grades, true);
