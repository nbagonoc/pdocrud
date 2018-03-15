<?php include 'header.php'; ?>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
	    	<h1 class="text-center">Delete User</h1>
		</div>
		<div class="panel-body">
			<?php
				$id = $_POST['newID'];
				$name = $_POST['newname'];
				//QUERY
				$delete = "DELETE FROM users WHERE ID='$id'";
				//RESULT
				if(!$connection->exec($delete)) {
					die("<h3>Delete Failed</h3><p>User was not deleted.</p>" .mysql_error());
					echo "<a href=\"read.php\" class=\"btn btn-default\">Ok</a>";
				}
				else{
					echo "<h3>Delete Successful</h3><p>{$name} has been deleted.</p>";
					echo "<a href=\"read.php\" class=\"btn btn-default\">Ok</a>";
				}
			?>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>