<?php
include_once 'header.php';
?>
    <section class="signup-form">
        <h2>Sign up</h2>
        <div class="signup-form-form">
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="name...">
                <input type="text" name="email" placeholder="email...">
                <input type="text" name="uid" placeholder="username...">
                <input type="password" name="pwd" placeholder="password...">
                <input type="password" name="pwdrepeat" placeholder="repeat password...">
                <button type="sibmit" name="submit">Sign Up</button>
            </form>
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill inputs</p>";
            }
            elseif ($_GET["error"] == "invaliduid"){
                echo "<p>Choose a proper username</p>";
            }
            elseif ($_GET["error"] == "invalidemail"){
                echo "<p>Choose a proper email</p>";
            } 
            elseif ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>passwords doesn't match</p>";
            }
            elseif ($_GET["error"] == "stmtfailed"){
                echo "<p>Somethink went wrongm try again</p>";
            }
            elseif ($_GET["error"] == "usernametaken"){
                echo "<p>Username already taken</p>";
            }
            elseif ($_GET["error"] == "none"){
                echo "<p>You have signed up!</p>";
            }
                    
        }

        ?>
    </section>


