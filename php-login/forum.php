<?php
include_once 'header.php';
include 'includes/forum.inc.php';
?>
<link rel="stylesheet" href="css/comment.css">
<div class='double-background'>
    <section class='comment-form'>
    <div class='container'>

<?php
if (isset($_SESSION["useruid"])) {?>
    <form action='includes/forum.inc.php' 
            method='post'>
    <h1>Add comment</h1>
    <p>Please fill in this form to create a comment.</p>
    <input type='text' name='comment' placeholder='your comment...'>
    <input type='text' 
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
    <input type='text' 
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

    while($row = mysqli_fetch_array($result2)) {
        echo"";
        echo  "
            <ul id='comments-list' class='comments-list'>
            <div class='comment-box'>
            <div class='comment-head'>";
        echo "<h6 class='comment-name by-author'>" . $row["useruid"] . "</h6>";;
        echo "<div class='comment-content'>"  . $row["comment"] .  "</div>";?>
        <?php if (isset($_SESSION["useruid"]) == true) { ?>
            <?php if ($_SESSION["useruid"] == $row["useruid"]) { ?>
                <a href="updateF.php?FcommentId=<?php echo $row["FcommentId"]; ?>" class="btn btn-success">Update</a>
                <a href="includes/deleteF.inc.php?FcommentId=<?php echo $row["FcommentId"]; ?>" class="btn btn-danger" onclick ="return confirm('Delete?');"
> Delete</a>				
            <?php }
            } else if (isset($_SESSION["adminN"]) == true) {?>
                <a href="includes/deleteF.inc.php?FcommentId=<?php echo $row["FcommentId"]; ?>" class="btn btn-danger" onclick ="return confirm('Delete?');"
 >Delete</a>
                <?php if ($_SESSION["adminN"] == $row["useruid"]) { ?>
                <a href="updateF.php?FcommentId=<?php echo $row["FcommentId"]; ?>" class="btn btn-success">Update</a>
                				
            <?php }
            }
            echo "</div>
            
            </div></ul>";
} 
$result2->free();
$conn->close();
?> 
    </div>         
    </section>
</div> 
<div id="footer">
        <div class="fcontent">
            <div class="column">
            <img src="https://cdn.discordapp.com/attachments/757590961839669339/1062822979240726719/kdmk.png" alt="LogoRVT">
                <p>
                    <strong>KMDK</strong>
                    Is a Latvian workers cooperative based in RVT college.
                </p>
                <p>
                    We've been making games since 2021 and we're going to keep on upgrading our games on PC.
                </p>
            </div>
        </div>
    </div>
</body>
</body>
</html>