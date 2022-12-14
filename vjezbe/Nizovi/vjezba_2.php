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

$users = [
    [
        'ime'=>'Pero',
        'prezime'=>'Perić',
        'godine'=>26,
        'spol'=>'M'
    ],
    [
        'ime'=>'Marta',
        'prezime'=>'Martić',
        'godine'=>26,
        'spol'=>'Ž'
    ]
]; 

unset($users[0]['spol']);
unset($users[1]['spol']); 

var_dump($users);

$users[] = [
    'ime'=>'Ivan',
    'prezime'=>'Ivić',
    'godine'=>39,
];

var_dump($users);

?>
</pre>
</body>
</html>