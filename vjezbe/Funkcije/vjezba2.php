<?php
// Deklariranje funkcije
function fullName($name, $surname){
    $fullName = $name . ' ' . $surname;
    return strtoupper($fullName);
}
// Dodjeljivanje vrijednosti iz funkcije varijabli
$fullName = fullName('Ivan', 'Horvat');
// Ispis vrijednosti varijable
echo $fullName;