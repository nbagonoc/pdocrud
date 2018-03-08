<?php include 'header.php'; ?>
<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="text-center">Create Users</h1>
		</div>
		<div class="panel-body">
			<form action="createProcess.php" method="POST" id="createForm" class="form-horizontal">
				
				<div class="form-group">		
					<label class="col-lg-2 control-label">Name:</label>
					<div class="col-lg-10">
						<input class="form-control" type="text" name="name" id="jsName" placeholder="your name"/>
					</div>
				</div>

				<div class="form-group">		
					<label class="col-lg-2 control-label">Email:</label>
					<div class="col-lg-10">
						<input class="form-control" type="text" name="email" id="jsEmail" placeholder="your email"/>
					</div>
				</div>

				<div class="form-group">		
					<label class="col-lg-2 control-label">Password:</label>
					<div class="col-lg-10">
						<input class="form-control" type="password" name="password" id="jsPassword" placeholder="your password"/>
					</div>
				</div>
				
				<div class="form-group">		
					<div class="col-lg-6">
						<button class="btn btn-success form-control" type="submit" name="submit" id="jsSubmit">Submit</button>
					</div>
					<div class="col-lg-6">
						<a href="index.php" class="btn btn-danger form-control">Cancel</a>
					</div>
				</div>
			</form>
			<div id="jsMessage"></div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>