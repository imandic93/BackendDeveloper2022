<?php
// Definiranje varijabli
$a = 5;
$b = 10;
$c = 15;

// Provjera da li je vrijednost varijable b između a i c
if(($b > $a && $b < $c) || ($b < $a && $b > $c)){
    echo 'Vrijednost b je između a i c';
} else {
    echo 'Vrijednost b nije između a i c';
}
?>