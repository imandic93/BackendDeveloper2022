<?php

if (!empty($_POST)){
    if (empty($_POST['ime']) && empty($_POST['prezime'])){
        echo 'Nema podataka za obradu';
    } else {
        echo 'Pozdrav ' . $_POST['ime'] . ' ' . $_POST['prezime'];
    }
} else {
    echo 'Nema podataka za obradu!';
}