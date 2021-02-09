<?php

namespace Brain\Games\Progression;

use function Brain\Games\Engine\run;

const DESCRIPTION = 'What number is missing in the progression?';

const LENGTH = 10;

function createQuestion($start, $step, $missingIndex, $progressionLength)
{
    $progression = '';
    for ($i = 0; $i < $progressionLength; $i++) {
        if ($i === $missingIndex) {
            $progression .= ".. ";
        } else {
            $progressionNumber = $start + $step * $i;
            $progression .= "{$progressionNumber} ";
        }
    }
    return trim($progression);
}

function progression()
{
    $getGameData = function () {
        $init = rand(1, 30);
        $step = rand(2, 6);
        $missingElementIndex = rand(0, LENGTH - 1);
        $answer = $missingElementIndex * $step + $init;
        $question = createQuestion($init, $step, $missingElementIndex, LENGTH);
        return [$question, strval($answer)];
    };

    return run(DESCRIPTION, $getGameData);
}
