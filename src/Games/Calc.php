<?php

namespace Brain\Games\Calc;

use function cli\line;
use function cli\prompt;

function run($userName, $maxRounds)
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

    line("What is the result of the expression?");

    $round = 1;

    while ($round <= $maxRounds) {
        $x = rand(1, 10);
        $y = rand(1, 10);

        $operation = array_rand($operatorsMap);
        $label = $labels[$operation];

        $correct = $operatorsMap[$operation]($x, $y);

        line("Question: $x $label $y");
        $answer = prompt("Your answer");

        if ($correct != $answer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correct);
            line('Let\'s try again, %s!', $userName);
            return;
        } else {
            line("Correct!");
        }

        $round++;
    }

    line("Congratulations, %s!", $userName);
}
