<?php

$disorganizedArray = [];
for ($i = 0; $i < 5; $i++) {
    $disorganizedArray[] = Rand(1, 10);
}
$organizedArray = $disorganizedArray;
$reverseOrganizedArray = $organizedArray;

sort($organizedArray);
rsort($reverseOrganizedArray);

var_dump($disorganizedArray);
var_dump($organizedArray);
var_dump($reverseOrganizedArray);

/*
sort organiza o value em ordem crescente
rsort organiza o value em ordem decrescente
usort passamos para o PHP como deve organizar os values
uksort passamos para o PHP como deve organizar as keys
ksort organiza a key em ordem crecente
krsort organiza a key em ordem decrescente
*/
