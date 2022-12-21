<?php

if (isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emtpyInputaldomgiinn($username, $pwd) !== false) {
        header("location: ../aldomgiinn.php?error=emptyinput");
        exit();
    }

    loginaldomgiinn($conn, $username, $pwd);
}
else{
    header("location: ../aldomgiinn.php");
    exit();
}