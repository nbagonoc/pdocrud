<?php include 'header.php'; ?>
<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
    		<h1 class="text-center">View, Edit, and Delete Users</h1>
		</div>
		<div class="panel-body">
			<?php
				
				//QUERY
				$query = "SELECT * FROM users";

			  	echo "<table class=\"table table-striped\">";
			    echo "<thead>";
				echo "<tr>";
			    echo "<th>Name</th>";
			    echo "<th>Email</th>";
			    echo "<th>Edit</th>";
			    echo "<th>Delete</th>";
				echo "</tr>";
			    echo "</thead>";
			    echo "<tbody>";

			    //RETURN
			    $datas = $connection->query($query);

				foreach($datas as $data){
					$id = $data['id'];
					$name = $data['name'];
					$email = $data['email'];
					$password = $data['password'];
					echo "<tr><td>$name</td><td>$email</td><td><a href=\"edit.php?ID=$id\" class=\"btn btn-default btn-xs\">edit</a></td><td><a href=\"delete.php?ID=$id\" class=\"btn btn-danger btn-xs\">delete</a></td></tr>";
				}
				
				echo "</tbody>";
				echo "</table>";

			?>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>
<?php databaseClose(); ?>