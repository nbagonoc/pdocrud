<?php include 'header.php'; ?>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
		    <h1 class="text-center">Delete User</h1>
		</div>
		<div class="panel-body">
			<?php
			//QUERY
			$idRequest = $_REQUEST['ID'];
			$query = "SELECT * FROM Users WHERE id = '$idRequest'";

		    //RETURN
		    $datas = $connection->query($query);
		    foreach($datas as $data){
				$id = $data['id'];
				$name = $data['name'];
		    }

				echo "<p>Are you sure you want to delete the user named: {$name}?</p>";
			?>
			<!--Dummmy the value for JS validation. You can fetch the actual values if you want,
				but all you really need is the ID to delete the user-->
			<form action="deleteProcess.php" method="POST" class="form-horizontal">
				<input type="hidden" name="newID" value="<?php echo $id; ?>">
				<input type="hidden" name="newname" id="jsName" value="<?php echo $name; ?>"><!-- dummmy the value. for JS validation -->
				<input type="hidden" name="newEmail" id="jsEmail" value="dummy@gmail.com"><!-- dummmy the value. for JS validation -->
				<input type="hidden" name="newPassword" id="jsPassword" value="dummyPassword"><!-- dummmy the value. for JS validation -->
				<div class="form-group">		
					<div class="col-lg-6">
						<button class="btn btn-danger form-control" type="submit" name="submit" id="jsSubmit">Yes</button>
					</div>
					<div class="col-lg-6">
						<a href="read.php" class="btn btn-success form-control">No</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>