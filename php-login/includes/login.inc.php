<?php

if (isset($_POST["submit"])) {
    echo "Logined ";
}
else{
    header("location: ../login.php");
}