<?php

namespace Brain\Games\Even;

function legend()
{
    return "Answer \"yes\" if the number is even, otherwise answer \"no\".";
}

function run()
{
    $num = rand(1, 30);
    $correct = $num % 2 == 0 ? 'yes' : 'no';

    return ['question' => $num, 'correct' => $correct];
}
