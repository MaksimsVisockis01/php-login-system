<?php
include_once 'header.php';
?>
<section>        
<?php
    include 'includes/forum.inc.php';

    while($row = mysqli_fetch_array($result)) {
        echo"";
        echo "
            <div class='container'>
            <div class='comment__container opened' id='first-comment'>";
        echo"<div class='comment__card'>";
        echo "<h3 class='comment__title'>" . $row["useruid"] . "</h3>";
        echo "<h3 class='comment__title'>" . $row["title"] . "</h3>"; ?>
        <?php echo "<p>"  . $row["text"] .  "</p>";
        echo "</div>
        </div>
        </div>";
} 
$result->free();
$conn->close();
?> 
            
    </section>
    

