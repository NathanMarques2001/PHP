<?php

require_once "autoload.php";

use Alura\Bank\Model\Adress;
use Alura\Bank\Model\Account\{CurrentAccount, Holder};

$firstAccount = new CurrentAccount(
  new Holder(
    "Patricia",
    "123.458.114-12",
    new Adress("Cidade 1", "Bairro 1", "Rua 1", "1")
  ),
);

$oneAdress = new Adress("Belo Horizonte", "Vista Alegre", "Rua Oito", "54");
echo $oneAdress . PHP_EOL;
$oneAdress->__set("number", "Rua São José");
echo $oneAdress . PHP_EOL;

$firstAccount->deposit(10000);
echo $firstAccount->getBalance() . PHP_EOL;
$firstAccount->withdraw(500);
echo $firstAccount->getBalance() . PHP_EOL;

echo $firstAccount->getHolderName() . " - " . $firstAccount->getHolderCpf();
