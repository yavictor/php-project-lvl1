<?php

namespace Brain\Games\Calc;

use function Brain\Games\Engine\run;

const DESCRIPTION = 'What is the result of the expression?';

const OPERATIONS = '+-*';

function calculate(int $x, int $y, string $operation): int
{
    $result = null;
    switch ($operation) {
        case '-':
            $result =  $x - $y;
            break;
        case '+':
            $result = $x + $y;
            break;
        case '*':
            $result =  $x * $y;
            break;
    }
    return $result;
}

function calc(): void
{
    $getGameData = function (): array {
        $a = rand(1, 30);
        $b = rand(1, 30);
        $index = rand(0, strlen(OPERATIONS) - 1);
        $operation = substr(OPERATIONS, $index, 1);
        $question = "{$a} {$operation} {$b}";
        $answer = calculate($a, $b, $operation);
        return [$question, strval($answer)];
    };

    run(DESCRIPTION, $getGameData);
}
