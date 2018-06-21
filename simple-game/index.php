<?php

require_once "guessNumber.php";

echo "Are you ready to guess a number?  Type your number [1-30]: " . PHP_EOL;

$randomNumber = rand(1, 30);

guessNumber($randomNumber, 1);
