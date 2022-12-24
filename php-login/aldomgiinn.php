<?php
include_once 'header.php';
?>

<section class="admin-form">
         <form action="includes/aldomgiinn.inc.php" method="POST">
            <div class="container">
                <h1>Admin</h1>
                <p>Please fill in this form to login.</p>
                
                <input type="text" name="uidA" placeholder="Enter Username" required>
                <input type="password" name="pwdA" placeholder="Enter Password" required>
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
            elseif ($_GET["error"] == "stmtfailed"){
                echo "<script>alert('Somethink went wrong try again')</script>";
            } 
            elseif ($_GET["error"] == "none"){
                echo "<script>alert('You have logined!')</script>";
            }
        }
    ?>
</section>