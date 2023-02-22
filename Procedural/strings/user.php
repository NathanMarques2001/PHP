<?php

$email = 'ana@email.com.br';

/*
busca a posição do caractere passado (somente 1) dentro da strig
se encontrar retorna a posição dele, caso contrario retorna falso
*/
$atPosition = strpos($email, '@');

/*
primeiro parametro é a string
segundo parametro em qual caractere deve começar
terceiro parametro em qual caractere deve parar
se o terceiro for omitido, vai ate o final da string
*/
echo substr($email, 0, $atPosition) . PHP_EOL;
echo substr($email, $atPosition + 1) . PHP_EOL;
