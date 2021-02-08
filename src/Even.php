<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function isEven($number)
{
    return $number % 2 === 0;
}

function getRandom()
{
    return rand(1, 100);
}

//function askQuestion()
//{
//    $rightCounter = 0;
//    for ($i = 0; $i < 3; $i++) {
//        $random = getRandom();
//        line("Question: ", $random);
//        $rightAnswer = isEven($random) ? 'yes' : 'no';
//        $answer = prompt('Your answer: ');
//        if ($rightAnswer === $answer) {
//            line('Correct!');
//            $rightCounter ++;
//        } else {
//            line("{$answer} is wrong answer ;(. Correct answer was {$rightAnswer}.");
//            return line("Let's try again, Bill!");
//        }
//    }
//}

function even()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $rightCounter = 0;
    for ($i = 0; $i < 3; $i++) {
        $random = getRandom();
        line("Question: {$random}");
        $rightAnswer = isEven($random) ? 'yes' : 'no';
        $answer = prompt('Your answer: ');
        if ($rightAnswer === $answer) {
            line('Correct!');
            $rightCounter++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            return line("Let's try again, {$name}");
        }
    }
    return line("Congratulations, {$name}!");
}
