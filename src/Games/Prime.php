<?php

namespace Brain\Games\Prime;

function legend()
{
    return "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
}

function run()
{
    $x = rand(1, 101);
    $correct = \gmp_prob_prime($x) === 2 ? "yes" : "no";

    return ['question' => $x, 'correct' => $correct];
}
