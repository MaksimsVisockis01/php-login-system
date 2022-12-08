<?php
include_once 'header.php';
?>
<section class="login-form">
    <h2>login</h2>
    <div class="login-form-form">
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="username/email...">
            <input type="password" name="pwd" placeholder="password...">
            <button type="submit" name="submit">Login</button>
        </form>
    </div>
    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill inputs</p>";
            }
            else if ($_GET["error"] == "wronglogin"){
                echo "<p>Incorrect login info</p>";
            }       
        }
    ?>
</section>