<?php

function showMessage(string $message)
{
    echo $message . PHP_EOL;
}

function deposit(array $account, float $value): array
{
    if ($value < 0) {
        showMessage('Voce so pode depositar valores positivos!');
    } else {
        $account['balance'] += $value;
        showMessage(
            "Deposito bem sucessido! Seu saldo atual é de R$ {$account['balance']}"
        );
    }
    return $account;
}

function withdraw(array $account, float $value): array
{
    if ($value < 0) {
        showMessage('Voce so pode sacar valores positivos!');
    } else {
        if ($account['balance'] < $value) {
            showMessage(
                "Voce nao pode sacar este valor! Seu saldo atual é de R$ {$account['balance']}"
            );
        } else {
            $account['balance'] -= $value;
            showMessage(
                "Saque bem sucessido! Seu saldo atual é de R$ {$account['balance']}"
            );
        }
    }
    return $account;
}
