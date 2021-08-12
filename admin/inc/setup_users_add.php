<?PHP


if (!empty($_POST['name']) && !empty($_POST['uname']) && !empty($_POST['pass'])){
// Insert new user
$sql = "INSERT INTO user (username
			,password
			,name)
		values ('$_POST[uname]'
			,'$_POST[pass]'
			,'$_POST[name]')";


	if ($con->query($sql) === TRUE) {
			echo '<div class="alert alert-success">
				Added new user: ' . $_POST['uname'] . '</div>';
		} else {
			echo '<div class="alert alert-danger"><b>Error: ' . $con->error . '</b><br>Msg: ' . $sql . '</div>';
		}	

} else {
	echo '';
}

// Display add user form
echo '
	<form class="form-inline" action="#" method="POST">
		<div class="form-group">
			<label class="sr-only" for="exampleInputName">Name</label>
			<input type="text" class="form-control" name="name" placeholder="Full Name"required>
		</div>
		<div class="form-group">
			<label class="sr-only" for="exampleInputName">Username</label>
			<input type="text" class="form-control" name="uname" placeholder="Username" required>
		</div>
		<div class="form-group">
			<label class="sr-only" for="exampleInputName">Password</label>
			<input type="text" class="form-control" name="pass" placeholder="Password" required>
		</div>
		
		<button type="reset" class="btn btn-default">Clear</button>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form><br>';

?>