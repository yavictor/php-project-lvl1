<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

const STEPS_COUNT = 3;

function run($gameDescription, $gameData)
{
    line('Welcome to the Brain Game!');
    line($gameDescription);
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);

    for ($i = 0; $i < STEPS_COUNT; $i++) {
        [$question, $correctAnswer] = $gameData();
        line("Question: {$question}");
        $playerAnswer = prompt('Your answer ');
        if ($correctAnswer !== $playerAnswer) {
            line("'{$playerAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return line("Let's try again, {$playerName}!");
        }
        line('Correct!');
    }
    line("Congratulations, {$playerName}!");
}
