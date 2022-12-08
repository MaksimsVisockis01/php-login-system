<?php

$serverName = "sql108.epizy.com";//localhost
$dBUsername = "root";
$dBPassword = "";
$dBName = "epiz_32644645_phpLogin";//php-login


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("connection failed: " . mysqli_connect_error());
}