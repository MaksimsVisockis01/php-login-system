<?php
    session_start();
    if (isset($_SESSION["useruid"])) {
        unset($_SESSION["useruid"]);
    }
    else{
        unset($_SESSION["aldomgiinnN"]);
    }
    header("location:index.php");
?>