<?php

$array = range(1, 20);
shuffle($array);

echo 'Array Original: ' . implode(',', $array) . PHP_EOL;
$ordened = quick_sort($array);
echo 'Array Ordenado : ' . implode(',', $ordened);
function quick_sort($arr)
{
  $left = $right = array();
  if (count($arr) < 2) {
    return $arr;
  }
  $pivot_key = key($arr);
  $pivot = array_shift($arr);

  foreach ($arr as $val) {
    if ($val <= $pivot) {
      $left[] = $val;
    } else {
      $right[] = $val;
    }
  }

  return array_merge(quick_sort($left), array($pivot_key => $pivot), quick_sort($right));
}