<?php

require_once 'functions.php';

$accounts = [
    '123.456.789-10' => [
        'name' => 'Vinicius',
        'balance' => 1000,
    ],
    '987.654.321-10' => [
        'name' => 'Maria',
        'balance' => 10000,
    ],
    '546.372.819-10' => [
        'name' => 'Alberto',
        'balance' => 300,
    ],
];

$accounts['123.258.265-10'] = [
    'name' => 'Jaber',
    'balance' => 1200,
];

//retira um item da lista
unset($accounts['987.654.321-10']);

$accounts['123.456.789-10'] = deposit($accounts['123.456.789-10'], 500);
$accounts['123.456.789-10'] = withdraw($accounts['123.456.789-10'], 900);
$accounts['123.456.789-10'] = deposit($accounts['123.456.789-10'], -500);
$accounts['123.456.789-10'] = withdraw($accounts['123.456.789-10'], -900);

foreach ($accounts as $key => $value) {
    echo "CPF: {$key}";
    echo "Nome: {$value['name']} - Salario: {$value['balance']}";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($accounts as $key => $account) { ?>
        <dt>
            <h3><?= $account['name']; ?> - <?= $key; ?></h3>
        </dt>
        <dd>Saldo: R$<?= $account['balance']; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>