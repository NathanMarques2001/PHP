<?php

$url = 'https://alura.com.br';

if (str_starts_with($url, 'https')) {
    echo 'A url é segura.';
} else {
    echo 'A url não é segura';
}

echo PHP_EOL;

if (str_ends_with($url, 'br')) {
    echo 'É um domínio do Brasil.';
} else {
    echo 'Não é um domínio do Brasil.';
}
