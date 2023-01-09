<?php

if (empty($_GET)){
    echo 'Nema podataka za obradu';
} else {
    foreach($_GET as $queryParamKey => $queryParamValue){
        echo $queryParamKey.'  '. $queryParamValue;
        echo '<br>';
    } 
}