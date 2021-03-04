<?php

namespace Brain\Games\Even;

function legend(): string
{
    return "Answer \"yes\" if the number is even, otherwise answer \"no\".";
}

function run(): array
{
    $rand = rand(1, 30);
    $correct = $rand % 2 == 0 ? 'yes' : 'no';

    return ['question' => $rand, 'correct' => $correct];
}
