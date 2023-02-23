<?php

require_once "OO/Account.php";
require_once "OO/Holder.php";

$patricia = new Holder("Patricia", "123.458.114-12");
$firstAccount = new Account($patricia);

$charles = new Holder("Charles", "141.453.867-15");
$secondAccount = new Account($charles);

$firstAccount->deposit(10000);
echo $firstAccount->getBalance() . PHP_EOL;
$firstAccount->withdraw(500);
echo $firstAccount->getBalance() . PHP_EOL;

echo $firstAccount->getHolderName() . PHP_EOL . $firstAccount->getHolderCpf();

unset($secondAccount);

echo PHP_EOL . Account::getNumberOfAccounts();
