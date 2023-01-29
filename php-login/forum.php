<?php
include_once 'header.php';
include 'includes/forum.inc.php';
?>

<section>        
<?php
    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';
    require_once 'includes/forum.inc.php';

    while($row = mysqli_fetch_array($result2)) {
        echo"";
        echo "
            <div class='container'>
            <div class='comment__container opened' id='first-comment'>";
        echo"<div class='comment__card'>";
        echo "<h3 class='comment__title'>" . $row["useruid"] . "</h3>";
        echo "<h3 class='comment__title'>" . $row["title"] . "</h3>";
         echo "<p>"  . $row["text"] .  "</p>";
        echo "</div>
        </div>
        </div>";
} 
//$result->free();
//$conn->close();
?> 
            
    </section>


<link rel="stylesheet" href="css/comment.css">

    <section class='comment-form'>
    <div class='container'>

<?php
if (isset($_SESSION["useruid"])) {?>
    <form action='includes/forum.inc.php' 
            method='post'>
    <h1>Add comment</h1>
    <p>Please fill in this form to create a comment.</p>
    <input type='text' name='comment' placeholder='your comment...'>
    <input type="text" 
		          name="forumId"
		          value='<?=$row["forumId"]?>'
		          hidden >
    <button type='submit' name='submit'>Add comment</button>
    </form>
    <?php 
    
}
else if (isset($_SESSION["adminN"])) { ?>
    <form action='includes/forum.inc.php' method='post'>
    <h1>Add comment</h1>
    <p>Please fill in this form to create a comment.</p>
    <input type='text' name='comment' placeholder='your comment...'>
    <input type="text" 
		          name="forumId"
		          value='<?=$row["forumId"]?>'
		          hidden >        
    <button type='submit' name='submit'>Add comment</button>
    </form>
    <?php }
else{
    echo"<section class='comment-form'>
    <div class='container'>
    <h1>To add comment need to login</h1>
    </div>";
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
<?php
    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';
    require_once 'includes/forum.inc.php';

    while($row = mysqli_fetch_array($result1)) {
        echo"";
        echo "
            <div class='container'>
            <div class='comment__container opened' id='first-comment'>";
        echo"<div class='comment__card'>";
        echo "<h3 class='comment__title'>" . $row["useruid"] . "</h3>";
        echo "<h3 class='comment__title'>" . $row["comment"] . "</h3>";
        echo "</div>
        </div>
        </div>";
} 
//$result->free();
//$conn->close();
?> 
            
    </section>

</body>
</html>