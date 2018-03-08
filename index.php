<?php include 'header.php'; ?>
<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="text-center">Welcome to BootsCRUD</h1>
		</div>
		<div class="panel-body">
			<?php
				
				//QUERY
				$query = "SELECT * FROM users";

			  	echo "<table class=\"table table-hover\">";
			    echo "<thead>";
				echo "<tr>";
			    echo "<th>Name</th>";
			    echo "<th>Email</th>";
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
					echo "<tr><td>$name</td><td>$email</td></tr>";
				}

				echo "</tbody>";
				echo "</table>";

			?>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>
<?php databaseClose(); ?>