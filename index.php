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

$a = 2;
$b = 2;
$c = "hello";
$d = "world";

echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a / $b . "<br>";
echo $a % $b . "<br>";
echo $a * $b . "<br>"; 

$f= $c . " " . $d;
echo $f;

echo "<br>";

echo ($a-=1)."<br>";
echo ($b+=2)."<br>";

$rez = $a < $b;
var_dump($rez);

echo ++$a;
echo "<br>";
echo $a--, '<br />';

?>
</pre>
</body>
</html>