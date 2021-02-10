<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\run;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function isEven($num): bool
{
    return $num % 2 === 0;
}

function even(): void
{
    $getGameData = function () {
        $question = rand(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        return [$question, $answer];
    };

    run(DESCRIPTION, $getGameData);
}
