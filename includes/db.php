<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


//! najlaksi nacin konektovanja (ne i najbolji)
// $connection = mysqli_connect('localhost', 'root', '', 'cms');

// if ($connection) {
//     echo "Connection established";
// } else {
//     echo "Connection could not be established";
// }
