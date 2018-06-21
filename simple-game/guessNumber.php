<?php

function guessNumber(int $randomNumber, int $counter)
{

    $handle      = fopen("php://stdin", "r");
    $inputNumber = (int)fgets($handle);


    if ( ! $inputNumber) {

        echo 'You entered wrong character! Please input a number' . PHP_EOL;

        fclose($handle);
        guessNumber($randomNumber, $counter + 1);

    }


    if ($randomNumber > $inputNumber) {

        fclose($handle);

        echo 'You entered smaller number than PC generated. Please, try again' . PHP_EOL;

        guessNumber($randomNumber, $counter + 1);

    } elseif ($randomNumber < $inputNumber) {

        fclose($handle);

        echo 'You entered bigger number than PC generate. Please, try again' . PHP_EOL;

        guessNumber($randomNumber, $counter + 1);

    }

    fclose($handle);

    echo PHP_EOL . "Congratulations. You've guessed a number. It is: $randomNumber" . PHP_EOL;

    exit("Total attempts: $counter" . PHP_EOL);

}
