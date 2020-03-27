<?php

// print_r( $_POST );

$heros = [
    [
        'name' => "Batman"
    ],
    [
        'name' => "Superman"
    ],
];

if (isset($_POST['name']))
{
    array_push($heros, ['name' => $_POST['name']]);
}

header('content-type: application/json');
echo json_encode($heros);