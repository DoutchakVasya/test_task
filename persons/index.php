<?php

require_once "showOlders.php";


echo "Please, enter age [1-20]";

$handle = fopen("php://stdin", "r");
$age    = (int)fgets($handle);

fclose($handle);

$ageToUnixTime = strtotime("-$age year");

$result = [];

foreach ($data as $key) {

    $birthday = $key->getBirthday();

    if ($birthday < $ageToUnixTime) {

        $result[] = [
            'birthday' => date('d-m-Y', $birthday),
            'lastName' => $key->getLastName()
        ];

    }

}

if (empty ($result)) {

    echo "There is no data to show" . PHP_EOL;
    exit();

}

var_export($result);

exit();
