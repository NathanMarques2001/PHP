<?php

$text = 'poxa, esse é meu texto caramba!';

/*
Substitui uma string por outra
primeiro parametro o que quer substituir
segundo parametro pelo que quer substituir
terceiro parametro onde vai substituir
*/
echo str_replace(['caramba', 'poxa'], '***',  $text);