<?php
// provjera varijable GET
if(!empty($_GET)){
    print_r($_GET);
} else {
    echo 'Nema podataka za obradu.';
}
?>