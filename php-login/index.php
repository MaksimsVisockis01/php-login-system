<?php
include_once 'header.php';
?>
<?php
    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';

    $sql = "SELECT textInput FROM admintext";
if($result = $conn->query($sql)){
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["textInput"] . "</td><br>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>

</body>
</html>