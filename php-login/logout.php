<?php
    session_start();
    unset($_SESSION["useruid"]);
    header("location:index.php");
?>