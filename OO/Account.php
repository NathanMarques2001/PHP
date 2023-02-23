<?php

class Account
{
  private readonly Holder $holder;
  private float $balance;

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

  public function withdraw(float $value): void
  {
    if ($value > $this->balance) {
      echo 'Saldo indisponível!';
      return;
    }

    $this->balance -= $value;
  }

  public function deposit(float $value): void
  {
    if ($value <= 0) {
      echo 'O valor precisa ser positivo!';
      return;
    }

    $this->balance += $value;
  }

  public function transfer(Account $destinationAccount, float $value): void
  {
    if ($value > $this->balance) {
      echo 'Saldo indisponível!';
      return;
    }

    $this->withdraw($value);
    $destinationAccount->deposit($value);
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
