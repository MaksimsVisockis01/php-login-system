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
}