<?php

$ageList = [12, 13, 14, 15, 16, 17, 18];
$ageList[] = 19;

echo 'Idades do array ->' . PHP_EOL;

for ($i = 0; $i < count($ageList); $i++) {
    echo "{$i} - {$ageList[$i]}" . PHP_EOL;
}
