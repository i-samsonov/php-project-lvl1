<?php

namespace Brain\Games\Gcd;

use function cli\line;
use function cli\prompt;

function run($userName, $maxRounds)
{

    line("Find the greatest common divisor of given numbers.");

    $round = 1;

    while ($round <= $maxRounds) {
        $x = rand(1, 50);
        $y = rand(1, 50);

        $correct = gcd($x, $y);

        line("Question: $x $y");
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





function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : $b;
}
