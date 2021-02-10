<?php

namespace Brain\Games\Prime;

use function Brain\Games\Engine\run;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($number): bool
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number) + 1; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function prime(): string
{
    $getGameData = function () {
        $question = rand(1, 100);
        $answer = isPrime($question) ? 'yes' : 'no';
        return [$question, $answer];
    };

    return run(DESCRIPTION, $getGameData);
}
