<?php

require_once "PersonClass.php";

$count = 20;

$data = [];

for ($i = 1; $i < $count; $i += 1) {

    $object = new Person();

    $object->setFirstName('John' . $i);
    $object->setLastName('Dou_' . $i);
    $object->setBirthday(strtotime("-$i year -$i month"));

    $data[$i] = $object;

}


