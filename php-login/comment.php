<?php
include_once 'header.php';
?>

<section class="comment-form">
        <h2>Add comment</h2>
        <div class="comment-form-form">
            <form action="includes/comment.inc.php" method="post">
                <input type="text" name="comment" placeholder="your comment...">
                <button type="submit" name="submit">Comment</button>
            </form>
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill inputs</p>";
            }
            elseif ($_GET["error"] == "none"){
                echo "<p>comment added!</p>";
            }
                    
        }

        ?>
    </section>


    <?php
    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';

    $sql = "SELECT usersUid, comment FROM commenttb";
if($result = $conn->query($sql)){
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["usersUid"] . "</td><br>";
            echo "<td>" . $row["comment"] . "</td><br>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} 
$conn->close();
?>

</body>
</html>
