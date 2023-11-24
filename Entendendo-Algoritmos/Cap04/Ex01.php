<?php

function sum(array $arr): int
{
  if (!empty($arr)) {
    return array_shift($arr) + sum($arr);
  }

  return 0;
}

echo sum([2, 4, 6]);