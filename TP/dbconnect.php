<?php

include_once "config.php";

try {
    $db_dsn = $db_type.":";
    $db_dsn.= "host=".$db_host.";";
    $db_dsn.= "dbname=".$db_name;

    $db = new PDO($db_dsn, $db_user, $db_pass);
} 
catch(PDOException $e)
{
    die($e->getMessage());
}