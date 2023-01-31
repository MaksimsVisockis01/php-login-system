<?php
include_once 'header.php';
include 'includes/updateFList.inc.php';
?>

</head>
<body>
	<div class="container">
		<form action="includes/updateFList.inc.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="Title">Name of title</label>
		     <input type="text" 
		           class="form-control" 
		           id="Title" 
		           name="Title" 
		           value='<?=$row["title"] ?>' >

             <label for="text">text</label>
		     <input type="text" 
		           class="form-control" 
		           id="text" 
		           name="text" 
		           value='<?=$row["text"] ?>' >
		   </div>
		   <input type="text" 
		          name="forumId"
		          value='<?=$row["forumId"]?>'
		          hidden >
		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">
				   Update</button>
			
	    </form>
	</div>
</body>
</html>