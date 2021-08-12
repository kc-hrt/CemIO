<?php
// requires and includes
require_once '../config.inc';
include '../src/header.php';
// session_start();

echo '<h3>New Order</h3>';

// Check for logged in
if(!isset($_SESSION['login_user']))
{
// ===============
// Content when logged out
//

$login_session=$_SESSION['login_user'];
	echo '<br><h4>
		You must be logged in for access to the Admin pages.</h4> 
		Click <a href="./login.php">here</a> to login.<br><br><br>';

} else {

//
// When Logged in

//
// Main Content when logged in
//



// Display add user form
echo '
	<form class="form-inline" action="createorder1.php" method="POST">
		<div class="form-group">
			<label class="sr-only" for="exampleInputName">How many plots?</label>
			<input type="number" class="form-control" name="qty" placeholder="# of Plots" required>
		</div>
		<button type="submit" class="btn btn-primary">Next ></button>
	</form><br>';

}
include '../src/footer.php';
?>