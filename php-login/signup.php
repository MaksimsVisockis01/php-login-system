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
</section>