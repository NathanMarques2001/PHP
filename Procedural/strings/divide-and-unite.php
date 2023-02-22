<?php

$user = 'Vínicius Dias';

/*
divide a string a partir de um separador
primeiro parametro é o separador
segundo parametro é a string
*/
list($firstName, $lastName) = explode(' ', $user);
echo "Nome: {$firstName}" . PHP_EOL . "Sobrenome: {$lastName}" . PHP_EOL;

$csv = 'Vinicius Dias,24,vinicius@alura.com.br';
list($name, $age, $email) = explode(',', $csv);
echo "Nome: {$name}" . PHP_EOL . "Idade: {$age}" . PHP_EOL . "E-mail: {$email}";

echo PHP_EOL;

/*
retorna os elementos do array
o primeiro parametro é como sera dividivo
o segundo parametro é o nome do array
*/
$phoneNumber = ['(24)94238-4298', '(31)94127-2394', '(11)93129-9240'];
echo implode(PHP_EOL, $phoneNumber);
