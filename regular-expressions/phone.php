<?php

$phoneNumbers = [
    'a(31) 92310-5329',
    '(32) 91238-4238',
    '(11) 92478-1290',
    '(31) 312-4312',
];
$regex = '/^\(([0-9]{2}\)) (9?[0-9]{4}-[0-9]{4})$/';

foreach ($phoneNumbers as $phone) {
    //testa se a regex bate com o valor passado
    $validNumber = preg_match($regex, $phone);
    if ($validNumber) {
        echo "O número de telefone {$phone} é válido!" . PHP_EOL;
    } else {
        echo "O número de telefone {$phone} é inválido!" . PHP_EOL;
    }
    //se o valor passado bater com a regex muda para outro formato
    echo preg_replace($regex, '(XX) \2', $phone) . PHP_EOL;
}
