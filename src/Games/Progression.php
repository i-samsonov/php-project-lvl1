<?php

namespace Brain\Games\Progression;

function legend(): string
{
    return "What number is missing in the progression?";
}

function run(): array
{
    $start = rand(1, 20);
    $step = rand(2, 4);
    $len = rand(5, 10);

    $p = [$start];

    for ($i = 1; $i < $len; $i++) {
        $p[] = $start + ($i) * $step;
    }

    $x = rand(1, $len - 2);
    $correct = $p[$x];
    $p[$x] = '..';

    return ['question' => implode(' ', $p), 'correct' => $correct];
}
