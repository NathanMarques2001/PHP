<?php

function emailGenerator($name): void
{//heredoc
    $emailContent = <<<END
  Olá, {$name}!

  Estamos entrando em contato para
  {motivo do contato}

  {assinatura}

  END;//apaga todos os espaços antes do end

    echo $emailContent;
}

emailGenerator('Charles');
