<?php include 'header.php'; ?>
<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
	    	<h1 class="text-center">Create user</h1>
		</div>
		<div class="panel-body">
			<?php
				$name = $_POST['name'];
				$email = $_POST['email'];
				$password = $_POST['password'];

				//QUERY
				if((trim($name) != "") && (trim($email) != "") && (trim($password) != "")){
					if(filter_var($email, FILTER_VALIDATE_EMAIL)){
						$create = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";
						if(!$connection->exec($create)) {
							die("<h3>Registration Failed</h3><p>User Was Not Added to Database</p>" .mysql_error());
							echo "<a href=\"create.php\" class=\"btn btn-default\">try again</a>";
						}
						else{
							echo "<h3>Registration Successful</h3>";
							echo "<p>User added to database:</p>";
							echo "<p>Name: {$name}</p><p>Email: {$email}</p>";
							echo "<a href=\"index.php\" class=\"btn btn-default\">Ok</a>";
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
					echo "<h3>Registration Failed</h3>";
					echo "<p>Kindly fill-in all forms.</p>";
					echo "<p>Please enable your javascript to improve user experience within this site.</p>";
					echo "<a href=\"create.php\" class=\"btn btn-default\">try again</a>";
				}
			?>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>
<?php databaseClose(); ?>