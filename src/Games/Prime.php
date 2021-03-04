<?php

namespace Brain\Games\Prime;

function legend(): string
{
    return "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
}

function run(): array
{
    $x = rand(1, 101);
//    $correct = gmp_prob_prime($x) === 2 ? "yes" : "no";
    $correct = $x > 1 && isPrime($x) ? "yes" : "no";

    return ['question' => $x, 'correct' => $correct];
}

function isPrime(int $n): bool
{
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
