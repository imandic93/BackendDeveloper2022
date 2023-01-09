<?php
// provjera varijable POST
if(!empty($_POST)){
    if(!empty($_POST['firstName']) || !empty($_POST['lastName'])){
        echo 'Hi ' . $_POST['firstName'] . ' ' . $_POST['lastName'];
    } else {
        echo 'Upišite ime i prezime.';
    }
} else {
    echo 'Nema podataka za obradu.';
}
?>