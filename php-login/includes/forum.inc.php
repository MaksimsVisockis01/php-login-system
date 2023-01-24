<?php 



if (isset($_GET['forumId'])) {
    include "dbh.inc.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $id = validate($_GET['forumId']);
	$sql = "SELECT * FROM forumlist WHERE `forumId` ='$id'";
    $result = mysqli_query($conn, $sql);




}else if (isset($_POST["submit"])) {
    session_start();
    include "dbh.inc.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
    $comment = validate($_POST['comment']);
    $id = validate($_POST['forumId']);

    if (isset($_SESSION["useruid"])) {
        $username = $_SESSION['useruid'];

        include 'dbh.inc.php';
        include 'functions.inc.php';
        
        if(emtyInputComment($comment) !== false) {
            header("location: ../forum.php?error=emptyinput");
            exit();
        }

        createFComment($conn, $username, $comment, $id);
        
    }else{
        $username = $_SESSION['adminN'];
        
        include 'dbh.inc.php';
        include 'functions.inc.php';
        
        if(emtyInputComment($comment) !== false) {
            header("location: ../forum.php?error=emptyinput");
            exit();
        }
    
        createFComment($conn, $username, $comment);
    }

}else{
    header("location: ../forum.php");
    exit();
}
