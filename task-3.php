<?php

$n1 = 0;
$n2 = 1;
$total = 0;
for ($i = 0; $i < 15; $i++)
{

  # Fibonacci
  $result = $n1 + $n2;
  $n1 = $n2;
  $n2 = $result;
  if ($result > 100)
  {
    break;
  }
  echo $result . "<br/>";
}
