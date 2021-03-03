<?php

namespace Brain\Games\Prime;

function legend()
{
    return "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
}

function run()
{
    $x = rand(1, 101);
//    $correct = gmp_prob_prime($x) === 2 ? "yes" : "no";
    $correct = $x > 1 && isPrime($x) ? "yes" : "no";

    return ['question' => $x, 'correct' => $correct];
}

function isPrime($n)
{
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
