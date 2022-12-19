<?php
include_once 'header.php';
?>
<section class='comment-form'>
    <div class='container'>

<?php
if (isset($_SESSION["useruid"])) {
    echo"<form action='includes/comment.inc.php' method='post'>";
    echo"<h1>Add comment</h1>";
    echo"<p>Please fill in this form to create a comment.</p>";
    echo"<input type='text' name='comment' placeholder='your comment...'>";
    echo"<button type='submit' name='submit'>Add comment</button>";
    echo"</form>";
}
else{
    echo"<section class='comment-form'>";
    echo"<div class='container'>";
    echo"<h1>To add comment need to login</h1>";
    echo"</div>";
}
?>      
   
   
<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill inputs</p>";
    } elseif ($_GET["error"] == "none") {
        echo "<p>comment added!</p>";
    }
}   
?>
    </div>
</section>


    <section>
    <div class='container'>
        <div class='comments'>
            <div class='row'>
                <div class='col-sm-5 col-md-6 col-12 pb-4'>
                    <div div class='comment mt-4 text-justify float-left'>
    <?php
    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';

    $sql = "SELECT usersUid, comment FROM commenttb";
if($result = $conn->query($sql)){
    foreach($result as $row){
        echo"";
        echo "<h4>" . $row["usersUid"] . "</h4>";
        echo "<p>" . $row["comment"] . "</p><br>";
    }
    echo "</table>";
    $result->free();
} 
$conn->close();
?>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
