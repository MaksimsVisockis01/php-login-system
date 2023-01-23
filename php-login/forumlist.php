<?php
include_once 'header.php';
?>
<link rel="stylesheet" href="css/comment.css">
<section class='comment-form'>
    <div class='container'>

<?php
if (isset($_SESSION["useruid"])) {
    echo"<form action='includes/forumlist.inc.php' method='post'>
    <h1>Add you question</h1>
    <p>Please fill in this form to create a comment.</p>
    <input type='text' name='title' placeholder='your title...'>
    <input type='text' name='text' placeholder='your text...'>
    <button type='submit' name='submit'>Add comment</button>
    </form>";
}
else if (isset($_SESSION["adminN"])) {
    echo"<form action='includes/forumlist.inc.php' method='post'>
    <h1>Add you question</h1>
    <p>Please fill in this form to create a comment.</p>
    <input type='text' name='title' placeholder='your title...'>
    <input type='text' name='text' placeholder='your text...'>
    <button type='submit' name='submit'>Add comment</button>
    </form>";
}
else{
    echo"<section class='comment-form'>
    <div class='container'>
    <h1>To add your question need to login</h1>
    </div>";
}
?>      
   
   
<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill inputs</p>";
    } elseif ($_GET["error"] == "none") {
        echo "<p>question added!</p>";
    }
}   
?>
    </div>
</section>



</section>


    <section>
    
        
            
    <?php
    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';
    require_once 'includes/test.inc.php';

    while($row = mysqli_fetch_array($forum)) {
        echo"";
        echo "
            <div class='container'>
            <div class='comment__container opened' id='first-comment'>";
        echo"<div class='comment__card'>";
        echo "<h3 class='comment__title'>" . $row["useruid"] . "</h3>";?>
        <a href="forum.php?forumId=<?php echo $row["forumId"]; ?>" class="btn btn-success"><?php echo $row["title"]; ?></a>
        <?php echo "<p>"  . $row["text"] .  "</p>";
        echo "</div>
        </div>
        </div>";
} 
$result->free();
$conn->close();
?> 
            
    </section>
    
</body>
</html>
