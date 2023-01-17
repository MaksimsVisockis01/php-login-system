<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style_header.css">
    
    
</head>
<body>
  
  <header class="header-main">
      <div class="header-main-logo">
        <img src="img/Rvt_8bit_logo.png" alt="LogoRVT">
      </div>
      <div class='hamburger'>
            <div class='line'></div>
            <div class='line'></div>
            <div class='line'></div>
      </div>
        <nav class="header-main-nav">
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="comment.php">COMMENTS</a></li>
            
            <?php
            if (isset($_SESSION["useruid"])) {
              echo "
            <li><a href='logout.php'>LOG OUT</a></li>
          </ul>
      </nav>";
            } else if (isset($_SESSION["adminN"])) {
              echo "
            <li><a href='test.php'>TEST</a></li>
            <li><a href='logout.php'>LOG OUT</a></li>
          </ul>
      </nav>
              ";

              
            } else{
              echo "
            <li><a href='patchnotes.php'>PATCH NOTES</a></li>
            <li><a href='login.php'>LOGIN</a></li>
          </ul>
      </nav>";
            }
            
          
      ?>
  </header>
  <script src="js/header_js.js"></script>

