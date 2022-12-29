<?php 

if (isset($_GET['commentId'])) {
	include "dbh.inc.php";

	// function validate($data){
   //      $data = trim($data);
   //      $data = stripslashes($data);
   //      $data = htmlspecialchars($data);
   //      return $data;
	// }

	// $id = validate($_GET['commentId']);

    $id = $_GET['commentId'];

	$sql = "SELECT * FROM commenttb WHERE commentId=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: update.php");
    }


}else if(isset($_POST['update'])){
    include "dbh.inc.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['usersUid']);
	$comment = validate($_POST['comment']);
	$id = validate($_POST['id']);

	if (empty($name)) {
		header("Location: ../update.php?id=$id&error=Name is required");
	}else if (empty($comment)) {
		header("Location: ../update.php?id=$id&error=Comment is required");
	}else {

       $sql = "UPDATE commenttb
               SET usersUid='$name', comment='$comment'
               WHERE commentId=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../test.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$username,&$comment");
       }
	}
}else {
	header("Location: test.php");
}