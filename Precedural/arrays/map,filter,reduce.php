<?php

$ageList = [12, 13, 14, 15, 16, 17, 18, 19, 20];

//parecido com o foreach, geralmente é utilizado com return para criar um novo array
array_map(function ($item) {
    print_r($item . PHP_EOL);
}, $ageList);

//função para buscar o valor desejado
function searchNumber(int $number, int $value): bool
{
    return $number === $value;
}
//se for true retorna o valor, caso contrario nao retorna nada
print_r(
    array_filter($ageList, function ($item) {
        return searchNumber($item, 19);
    })
);

function sum(int $acumulator, int $currentValue): int
{
    return $acumulator + $currentValue;
}

print_r(array_reduce($ageList, 'sum', 0));