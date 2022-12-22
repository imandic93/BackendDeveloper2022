<?php

$knjigeJson = file_get_contents('knjige.json');
$knjige = json_decode($knjigeJson, true);

$knjige[0]['title'] = 'Foo';
$knjige[] = [
    'foo' => 'bar'
];

file_put_contents('knjige.json', json_encode($knjige));
