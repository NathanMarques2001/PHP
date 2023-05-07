<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\Account\Account;

class CurrentAccount extends Account {

  public function transfer(Account $destinationAccount, float $value): void
  {
    if ($value > $this->getBalance()) {
      echo 'Saldo indisponível!';
      return;
    }

    $this->withdraw($value);
    $destinationAccount->deposit($value);
  }

  protected function tariffPercent(): float
  {
    return 0.05;
  }
}