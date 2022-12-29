<?php  

if(isset($_GET['commentId'])){

   include "dbh.inc.php";

   // function validate($data){
   //      $data = trim($data);
   //      $data = stripslashes($data);
   //      $data = htmlspecialchars($data);
   //      return $data;
	// }

	// $id = validate($_GET['commentId']);

   $id = $_GET['commentId'];
	$sql = "DELETE FROM commenttb WHERE commentId = $id";

   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../test.php?success=successfully deleted");
   }else {
      header("Location: ../test.php?error=unknown error occurred&$username,&$comment");
   }

}else {
	header("Location: ../test.php");
}