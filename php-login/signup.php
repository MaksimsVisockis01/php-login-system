<?php
// include_once 'header.php';
?>
<section class="signup-form">
        <div class="container">
            <form action="includes/signup.inc.php" method="POST">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                
                <input type="text" name="name" placeholder="Enter Name" required>
                <input type="text" name="email" placeholder="Enter Email" required>
                <input type="text" name="uid" placeholder="Enter Username" required>
                <input type="password" name="pwd" placeholder="Enter Password" required>
                <input type="password" name="pwdrepeat" placeholder="Repeat Password" required>

                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<script>alert('Fill inputs')</script>";
            }
            elseif ($_GET["error"] == "invaliduid"){
                echo "<script>alert('Choose a proper username')</script>";
            }
            elseif ($_GET["error"] == "invalidemail"){
                echo "<script>alert('Choose a proper email')</script>";
            } 
            elseif ($_GET["error"] == "passwordsdontmatch") {
                echo "<script>alert('passwords doesn't match')</script>";
            }
            elseif ($_GET["error"] == "stmtfailed"){
                echo "<script>alert('Somethink went wrong try again')</script>";
            }
            elseif ($_GET["error"] == "usernametaken"){
                echo "<script>alert('Username already taken')</script>";
            }
            elseif ($_GET["error"] == "none"){
                echo "<script>alert('You have signed up!')</script>";
            }
                    
        }

        ?>
</section>


