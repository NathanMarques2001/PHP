<?php

$array = [1, 2, 3, 5, 6, 7, 10, 25, 254];

echo binarySearch($array, 254);

function binarySearch(array $arr, int $n): int
{
  $begin = 0;
  $end = count($arr);

  while ($begin <= $end) {
    $mid = ($begin + $end) / 2;

    if ($arr[$mid] == $n) {
      return $mid;
    } elseif ($arr[$mid] < $n) {
      $begin = $mid + 1;
    } else {
      $end = $mid - 1;
    }
  }

  return -1;
}