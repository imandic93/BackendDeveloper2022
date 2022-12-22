<?php
// Deklariranje funkcije
function randomAddition($number){
    static $a = 0;
    $a += $number;
    return $a;
}
// Deklariranje funkcije kao varijabla
$randomAddition = 'randomAddition';
// Pozivanje funkcije preko varijable te ispis rezultata
echo $randomAddition(rand(1,10)) . '<br>';
echo $randomAddition(rand(1,10)) . '<br>';
echo $randomAddition(rand(1,10)) . '<br>';
echo $randomAddition(rand(1,10)) . '<br>';
echo $randomAddition(rand(1,10)) . '<br>';
?>