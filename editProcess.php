<?php include 'header.php'; ?>
<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
	   		<h1 class="text-center">Edit User</h1>
		</div>
		<div class="panel-body">
			<?php
				$newId = $_POST['newID'];
				$newName = $_POST['newname'];
				$newEmail = $_POST['newemail'];
				$newPassword = $_POST['newpassword'];

				//QUERY
				if((trim($newName) != "") && (trim($newEmail) != "") && (trim($newPassword) != "")){
					if(filter_var($newEmail, FILTER_VALIDATE_EMAIL)){
						$update = "UPDATE users SET name='$newName',email='$newEmail',password='$newPassword' WHERE id='$newId'";
						if(!$connection->exec($update)) {
							die("<h3>Update Failed</h3><p>User was not updated.</p>" .mysql_error());
							echo "<a href=\"read.php\" class=\"btn btn-default\">Ok</a>";
						}
						else{
							echo "<h3>Update Successful</h3><p>User updated successfuly</p>";
							echo "<a href=\"read.php\" class=\"btn btn-default\">Ok</a>";
						}
					}
					else{
						echo "<h3>Update Failed</h3>";
						echo "<p>Invalid email address.</p>";
						echo "<p>Please enable your javascript to improve user experience within this site.</p>";
						echo "<a href=\"read.php\" class=\"btn btn-default\">Ok</a>";					
					}
				}
				else{
						echo "<h3>Update Failed</h3>";
						echo "<p>Kindly fill-in all forms.</p>";
						echo "<p>Please enable your javascript to improve user experience within this site.</p>";
						echo "<a href=\"read.php\" class=\"btn btn-default\">Ok</a>";
				}
			?>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>
<?php databaseClose(); ?>