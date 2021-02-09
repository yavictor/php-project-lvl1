<?php

namespace Brain\Games\Gcd;

use function Brain\Games\Engine\run;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function searchGcd($num1, $num2)
{
    if ($num2 > $num1) {
        return searchGcd($num2, $num1);
    }
    if ($num2 === 0) {
        return $num1;
    } return searchGcd($num2, ($num1 % $num2));
}

function gcd()
{
    $getGameData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $question = "{$number1} {$number2}";
        $answer = searchGcd($number1, $number2);
        return [$question, strval($answer)];
    };

    return run(DESCRIPTION, $getGameData);
}
