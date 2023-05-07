<?php

namespace Alura\Bank\Model\Account;

abstract class Account
{
  private readonly Holder $holder;
  protected float $balance;

  private static int $numberOfAccounts = 0;

  public function __construct(Holder $holder)
  {
    $this->holder = $holder;
    $this->balance = 0;

    self::$numberOfAccounts++;
  }

  public function __destruct()
  {
    if (self::$numberOfAccounts > 2) {
      echo "Existe mais de uma conta ativa" . PHP_EOL;
    }
    self::$numberOfAccounts--;
  }

  abstract protected function tariffPercent(): float;

  public function withdraw(float $value): void
  {
    $tariff = $value * $this->tariffPercent();
    $tariffValue = $tariff + $value;
    if ($tariffValue > $this->balance) {
      echo 'Saldo indisponível!';
      return;
    }

    $this->balance -= $tariffValue;
  }

  public function deposit(float $value): void
  {
    if ($value <= 0) {
      echo 'O valor precisa ser maior do que zero!';
      return;
    }

    $this->balance += $value;
  }

  public function getBalance(): float
  {
    return $this->balance;
  }

  public function getHolderCpf(): string
  {
    return $this->holder->getCpf();
  }

  public function getHolderName(): string
  {
    return $this->holder->getName();
  }

  public static function getNumberOfAccounts(): int
  {
    return self::$numberOfAccounts;
  }
}
