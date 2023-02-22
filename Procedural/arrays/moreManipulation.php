<?php

$students2022 = ['Vinicius', 'João', 'Ana', 'Roberto', 'Maria'];
$newStudents = ['Claudio', 'Daiane', 'Alice'];

$students2023 = [...$students2022, 'Bob', ...$newStudents];

//retira o primeiro elemento -> Vinicius
array_shift($students2023);

//retira o ultimo elemento -> Alice
array_pop($students2023);

//adiciona ao final da lista -> Luiz
array_push($students2023, 'Luiz');

//adiciona ao começo da lista -> Charlie
array_unshift($students2023, 'Charlie');

var_dump($students2023);
