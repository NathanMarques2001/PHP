<?php

$grades1 = [
    'Vinicius' => null,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$grades2 = [
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 10,
    'Maria' => 9,
];

/*
verifica a key e o value, se o value tiver mudado ou a 
key nao estiver presente retorna onde esta faltando ou
o que mudou
*/
var_dump(array_diff_assoc($grades1, $grades2));

/*
Verifica se falta alguma key, se faltar ele retorna a mesma
*/
var_dump(array_diff_key($grades1, $grades2));

/*
Verifica se algum valor mudou, se mudou ele retorna qual 
*/
var_dump(array_diff($grades1, $grades2));
