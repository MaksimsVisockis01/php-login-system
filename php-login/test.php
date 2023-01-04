<?php
include_once 'header.php';
include "includes/dbh.inc.php";
include 'includes/test.inc.php';
?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Comments</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Username</th>
			      <th scope="col">Comment</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <?php
				$i=0;
				while($row = mysqli_fetch_array($result)) {
				?>
				
				<td><?php echo $row["commentId"]; ?></td>
				<td><?php echo $row["usersUid"]; ?></td>
				<td><?php echo $row["comment"]; ?></td>
				<td>
					<a href="update.php?commentId=<?php echo $row["commentId"]; ?>" class="btn btn-success">Update</a>
					<a href="includes/delete.inc.php?commentId=<?php echo $row["commentId"]; ?>" class="btn btn-danger">Delete</a>				
				</td>
				</tr>
				<?php
				$i++;
				}
				?>
			</table>	  
		</div>
	</div>
</body>
</html>