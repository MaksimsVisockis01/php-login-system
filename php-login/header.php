<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Php login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
    <div class="topnav">
      <a href="index.php">Home</a>
      
      <?php
        if (isset($_SESSION["useruid"])) {
          echo "<a href='profile.php'>Profile page</a>";
          echo "<a href='logout.php'>Log out</a>";
          echo " <a href='addtext.php'>Add text</a>";
          echo " <a href='comment.php'>Comments</a>";
        }
        else{
          echo "<a href='signup.php'>Sign Up</a>";
          echo "<a href='login.php'>Login</a>";
        }
      ?>

    </div>
