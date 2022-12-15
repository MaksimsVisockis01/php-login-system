<?php
session_start();

if (isset($_POST["submit"])) {

    $comment = $_POST["comment"];
    $username = $_SESSION['useruid'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emtyInputComment($comment) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    createComment($conn, $username, $comment);

}else{
    header("location: ../comment.php");
    exit();
}
