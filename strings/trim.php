<?php

//remove os espaços do começo e do fim da string
$name = '  Nathan   ';
echo trim($name) . PHP_EOL;

/*
primeiro parametro string
segundo parametro o caractere que deve remover
*/
$csv = 'vinicius dias,24,';
echo trim($csv, ',');

/*
ltrim apaga somente do lado esquerdo
rtrim apaga somente do lado direito
*/
