<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
<?php

$primeNumbers = [2, 3, 5, 7, 11];

if(isset($primeNumbers[2])){
    echo $primeNumbers[2] . "<br>";
} else {
    echo "Ne postoji treci element";
}

$primeNumbers[] = 13;

var_dump($primeNumbers, count($primeNumbers));

rsort($primeNumbers);

var_dump($primeNumbers);

?>
</pre>
</body>
</html>