<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function initGame($gameName)
{
    line('Welcome to the Brain Game!');
    $userName = prompt('May I have your name?', false, ' ');
    line("Hello, %s!", $userName);

    $funcLegend = '\Brain\Games\\' . $gameName . '\legend';
    $funcRun = '\Brain\\Games\\' . $gameName . '\run';

    $legend = $funcLegend();
    line($legend);

    $round = 1;
    while ($round <= 3) {
        $result = $funcRun();

        line("Question: %s", $result['question']);
        $answer = prompt("Your answer", false, ': ');

        if ($result['correct'] != $answer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $result['correct']);
            line('Let\'s try again, %s!', $userName);
            return;
        } else {
            line("Correct!");
        }

        $round++;
    }

    line("Congratulations, %s!", $userName);
}
