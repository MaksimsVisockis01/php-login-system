<?php  

include "dbh.inc.php";

$sql = "SELECT * FROM commenttb ORDER BY commentId DESC";
$result = mysqli_query($conn, $sql);