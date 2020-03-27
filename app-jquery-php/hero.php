<?php

$heros = [
    [
        'name' => "Batman"
    ],
    [
        'name' => "Superman"
    ],
];

header('content-type: application/json');
echo json_encode($heros);