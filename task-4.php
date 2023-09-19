<?php

function Fibonacci($length)
{
    $n1 = 0;
    $n2 = 1;
    $total = 0;
    for ($i = 0; $i < $length; $i++)
    {
        # Fibonacci
        $result = $n1 + $n2;
        $n1 = $n2;
        $n2 = $result;

        echo $result . "<br/>";
    }
}

Fibonacci(15);
