<?php
include_once 'header.php';
include 'includes/update.inc.php';

?>


	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>
<body>
	<div class="container">
		<form action="includes/update.inc.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="comment">Comment</label>
		     <input type="Comment" 
		           class="form-control" 
		           id="comment" 
		           name="comment" 
		           value='<?=$row["comment"] ?>' >
		   </div>
		   <input type="text" 
		          name="commentId"
		          value='<?=$row["commentId"]?>'
		          hidden >
		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">
				   Update</button>
			
	    </form>
	</div>
</body>
</html>