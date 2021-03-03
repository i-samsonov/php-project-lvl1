<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function initGame($gameName)
{
    line('Welcome to the Brain Game!');
    $userName = prompt('May I have your name?', false, ' ');
    line("Hello, %s!", $userName);

    $func = '\Brain\Games\\' . $gameName . '\\run';

    return $func($userName, $maxRounds = 3);
}
