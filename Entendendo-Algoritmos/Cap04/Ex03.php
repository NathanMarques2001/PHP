<?php

function highElement(array $arr): int
{
  if (!empty($arr)) {
    $current = array_shift($arr);
    $after = highElement($arr);
    return $current > $after ? $current : $after;
  }

  return 0;
}

echo highElement([2, 6, 4]);