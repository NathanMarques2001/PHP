<?php

$number = 5;
echo "Tabuada do {$number}" . PHP_EOL;

for ($i = 1; $i < 10; $i++) {
    $result = $number * $i;
    echo "{$number} * {$i} = {$result}" . PHP_EOL;
}
