<?php

if (isset($_POST["submit"])) {
    echo "Signed up";
}
else{
    header("location: ../signup.php");
}