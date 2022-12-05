<?php

$serverName = "lacalhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "php-login";


$conn = mysqli_connet($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("connection failed: " . mysqli_connect_error());
}