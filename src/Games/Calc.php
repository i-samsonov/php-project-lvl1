<?php

namespace Brain\Games\Calc;

function legend(): string
{
    return "What is the result of the expression?";
}

function run(): array
{
    $operatorsMap = [
        'times' => function ($x, $y) {
            return $x * $y;
        },
        'plus' => function ($x, $y) {
            return $x + $y;
        },
        'minus' => function ($x, $y) {
            return $x - $y;
        },
    ];
    $labels = [
        'times' => '*',
        'plus' => '+',
        'minus' => '-',
    ];

    $x = rand(1, 10);
    $y = rand(1, 10);

    $operation = array_rand($operatorsMap);
    $label = $labels[$operation];

    $correct = $operatorsMap[$operation]($x, $y);

    return ['question' => "$x $label $y", 'correct' => $correct];
}
