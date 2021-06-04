<?php

$Host = "localhost";
$User = "root";
$Pass = "";
$DbName = "pratt_academy";

$connection = mysqli_connect($Host, $User, $Pass, $DbName);

if (!isset($connection)) {
    die("Connection error");
}
