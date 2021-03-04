<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function initGame(string $gameName): void
{
    line('Welcome to the Brain Game!');
    $userName = prompt('May I have your name?', '', ' ');
    line("Hello, %s!", $userName);

    $funcLegend = '\Brain\Games\\' . $gameName . '\legend';
    $funcRun = '\Brain\\Games\\' . $gameName . '\run';

//    $legend = $funcLegend();
//    $legend = call_user_func($funcLegend);
    $legend = is_callable($funcLegend) ? $funcLegend() : false;

    line($legend);

    $round = 1;
    while ($round <= 3) {
//        $result = $funcRun();
//        $result = call_user_func($funcRun);
        $result = is_callable($funcRun) ? $funcRun() : false;

        line("Question: %s", $result['question']);
        $answer = prompt("Your answer", '', ': ');

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
