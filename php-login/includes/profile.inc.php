<?php
require_once 'dbh.inc.php';

$user=$_SESSION['useruid'];
$sql= "SELECT usersName,UsersEmail,usersUid FROM users WHERE usersUid='$user'";
$result = mysqli_query($conn, $sql);


?>