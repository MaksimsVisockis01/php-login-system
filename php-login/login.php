<?php
include_once 'header.php';
?>
    <section class="login-form">
         <form action="includes/login.inc.php" method="POST">
            <div class="container">
                <h1>Login</h1>
                <p>Please fill in this form to login.</p>
                
                <input type="text" name="uid" placeholder="Enter Username" required>
                <input type="password" name="pwd" placeholder="Enter Password" required>
                <button type="submit" name="submit">Login</button>
            </div>
        </form>

    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<script>alert('Fill inputs')</script>";
            }
            elseif ($_GET["error"] == "wronglogin"){
                echo "<script>alert('Incorrect login info')</script>";
            }
            elseif ($_GET["error"] == "wrongpassword"){
                echo "<script>alert('Incorrect password')</script>";
            }    
        }
    ?>
</section>