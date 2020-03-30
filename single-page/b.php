<?php

$cars = [
    "Tesla",
    "Ford",
    "Toyota",
    "Doge"
];

header("content-type: application/json");
echo json_encode($cars);