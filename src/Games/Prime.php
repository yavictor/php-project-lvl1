<?php

namespace Brain\Games\Prime;

use function Brain\Games\Engine\run;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function prime(): void
{
    $getGameData = function (): array {
        $question = rand(1, 10);
        $answer = isPrime($question) ? 'yes' : 'no';
        return [$question, $answer];
    };

    run(DESCRIPTION, $getGameData);
}
