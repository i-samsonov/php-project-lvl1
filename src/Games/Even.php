<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function run($userName, $maxRounds)
{
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");

    $round = 1;
    while ($round <= $maxRounds) {
        $num = rand(1, 30);
        $correct = $num % 2 == 0 ? 'yes' : 'no';

        line("Question: $num");
        $answer = prompt("Your answer");

        if ($correct !== $answer) {
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
