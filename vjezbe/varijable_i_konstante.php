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

$x = 1;
$b = 1.2;
$c = "hello";
$d = true;

echo "x: $x,\n b: $b\n, c: $c\n, d:$d\n";

define("pi",3.14,true);
define("pr_log",2.7,true);

echo "Vrijednost PI: ".pi."<br>"."Vrijednost prirodnog logaritma: ".pr_log; 

define("FIFA_WC_2022_PRVAK", "HRVATSKA");
echo "<br>Konstanta FIFA_WC_2022_PRVAK: " . FIFA_WC_2022_PRVAK; 

$a = 4;
$b = &$a;

echo "prva vrijednost b; $b\n";
$a = 10;

echo "druga vrijednost b; $b";

?>
</pre>
</body>
</html>