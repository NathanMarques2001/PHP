<?php

function countElements(array $arr): int
{
  if (!empty($arr)) {
    array_shift($arr);
    return 1 + countElements($arr);
  }

  return 0;
}

echo countElements([2, 4, 6]);