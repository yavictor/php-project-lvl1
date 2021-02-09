<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\run;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function isEven($num)
{
    return $num % 2 === 0;
}

function even()
{
    $getGameData = function () {
        $question = rand(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        return [$question, $answer];
    };

    return run(DESCRIPTION, $getGameData);
}
