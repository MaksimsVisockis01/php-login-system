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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/reset.css"> -->
</head>
<body>



<nav class="navbar navbar-default" role="navigation">
  <div class="collapse navbar-collapse" id="navbar-collapse-01">
    <ul class="nav navbar-nav">   
      <li><a href="index.php">Home</a></li>
    </ul>
      <?php        
        if (isset($_SESSION["useruid"])) {
          echo "<div class='collapse navbar-collapse' id='navbar-collapse-01'> ";
          echo "<ul class='nav navbar-nav navbar-right'>";
          echo "<li><a href='logout.php'>Log out</a></li>";
          echo "</ul>";
          echo "</div>";
        }
        else{
          echo "<div class='collapse navbar-collapse' id='navbar-collapse-01'>    ";
          echo "<ul class='nav navbar-nav navbar-right'>";
          echo " <li><a href='signup.php'>Sign Up</a></li>";
          echo "<li><a href='login.php'>Login</a></li>";
          echo "</ul>";
          echo "</div>";
        } 
      ?>
  </div>
</nav>

