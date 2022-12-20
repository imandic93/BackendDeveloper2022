<?php
// Deklariranje funkcije
function returnText(){
    return 'Vraćeni tekst iz funkcije';
}
// Dodjeljivanje vrijednosti iz funkcije varijabli
$funcText = returnText();
// Ispis vrijednosti varijable
echo $funcText;