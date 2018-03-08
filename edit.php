<?php include 'header.php'; ?>
<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>

<div class="container">
  <div class="main">

	<?php
		
		//QUERY
		$idRequest = $_REQUEST['ID'];
		$query = "SELECT * FROM users WHERE id = '$idRequest'";

	    //RETURN
	    $datas = $connection->query($query);
	    foreach($datas as $data){
			$id = $data['id'];
			$name = $data['name'];
			$email = $data['email'];
			$password = $data['password'];
	    }

	?>

	<div class="container">
	  <div class="main">
	    <h1 class="text-center">Edit User</h1>
			<form action="editProcess.php" method="POST" id="updateForm" class="form-horizontal">
			<input type="hidden" name="newID" value="<?php echo $id;?>"/>
				<div class="form-group">	
					<label class="col-lg-2 control-label">Name:</label>
					<div class="col-lg-10">
						<input class="form-control" type="text" name="newname" id="jsName" value="<?php echo $name;?>"/>
					</div>
				</div>

				<div class="form-group">		
					<label class="col-lg-2 control-label">Email:</label>
					<div class="col-lg-10">
						<input class="form-control" type="text" name="newemail" id="jsEmail" value="<?php echo $email;?>"/>
					</div>
				</div>

				<div class="form-group">		
					<label class="col-lg-2 control-label">Password:</label>
					<div class="col-lg-10">
						<input class="form-control" type="password" name="newpassword" id="jsPassword" value="<?php echo $password;?>"/>
					</div>
				</div>
				
				<div class="form-group">		
					<div class="col-lg-6">
						<button class="btn btn-success form-control" type="submit" name="submit" id="jsSubmit">Edit</button>
					</div>
					<div class="col-lg-6">
						<a href="read.php" class="btn btn-danger form-control">Cancel</a>
					</div>
				</div>
			</form>
	  </div>
	<div id="jsMessage"></div>
	</div>

  </div>
</div>

<?php include 'footer.php'; ?>
<?php databaseClose(); ?>