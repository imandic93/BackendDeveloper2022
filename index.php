<?php

function getNameAndSurnameAddedTogether($name, $surname)
{
    $nameAndSurname = $name . ' ' . $surname;
    $nameAndSurname = mb_strtoupper($nameAndSurname);

    return $nameAndSurname;
}

$text = getNameAndSurnameAddedTogether('Ivan', 'Mandić');
echo "$text\n";