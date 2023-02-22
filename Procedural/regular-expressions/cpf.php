<?php

$cpf = ['123.456.789-19', '13242341242', '123591320'];
$regexFormatCpf = '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/';
$regexWithoutCpfFormat = '/^([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})$/';
$formatCpf = '\1.\2.\3-\4';

foreach ($cpf as $item) {
    $cpfValid = preg_match($regexFormatCpf, $item);
    if ($cpfValid) {
        echo "O CPF {$item} é válido!" . PHP_EOL;
    } else {
        if (strlen($item) == 11) {
            $newCPF = preg_replace($regexWithoutCpfFormat, $formatCpf, $item);
            echo "Agora o CPF {$newCPF} é válido!" . PHP_EOL;
        } else {
            echo "O CPF {$item} é inválido!" . PHP_EOL;
        }
    }
}
