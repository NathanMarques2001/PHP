<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\Account\Account;

class SavingsAccount extends Account
{

  protected function tariffPercent(): float
  {
    return 0.03;
  }
}
