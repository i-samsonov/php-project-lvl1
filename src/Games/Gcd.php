<?php

namespace Brain\Games\Gcd;

function legend(): string
{
    return "Find the greatest common divisor of given numbers.";
}

function run(): array
{
    $x = rand(1, 50);
    $y = rand(1, 50);

    $correct = gcd($x, $y);

    return ['question' => "$x $y", 'correct' => $correct];
}

function gcd(int $a, int $b): ?int
{
    return (bool)($a % $b) ? gcd($b, $a % $b) : $b;
}
