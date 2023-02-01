<?php
include_once 'header.php';
include_once 'includes/profile.inc.php';
?>


<section> 
<?php
while($row = mysqli_fetch_array($result)) {
        echo"";
        echo "
            <div class='container'>
            <div class='comment__container opened' id='first-comment'>";
        echo"<div class='comment__card'>";
        echo "<h3 class='comment__title'>" . $row["usersName"] . "</h3>";
        echo "<p>"  . $row["UsersEmail"] .  "</p>";
        echo "<p>"  . $row["usersUid"] .  "</p>";?>
        <?php echo "</div>
        </div>
        </div>";
} 
$result->free();
$conn->close();
?> 
            
    </section>