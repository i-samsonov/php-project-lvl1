<?php

namespace Brain\Games\Gcd;

function legend()
{
    return "Find the greatest common divisor of given numbers.";
}

function run()
{
    $x = rand(1, 50);
    $y = rand(1, 50);

    $correct = gcd($x, $y);

    return ['question' => "$x $y", 'correct' => $correct];
}

function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : $b;
}
