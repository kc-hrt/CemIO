<?php
include '../src/header.php';
//include '../config.inc';
//$dbconfig = mysqli_connect($servername,$username,$password,$dbname);
//session_start();

// Check to see if logged in
if(!isset($_SESSION['login_user']))
{
// ===============
// Content when logged out
//

	$login_session=$_SESSION['login_user'];
	echo '<br><h3>
		You must be logged in for access to the Admin pages.</h3> 
		Click <a href="./login.php">here</a> to login.<br><br><br>';

} else {

// ===============
// content when logged in
//
	echo '<h1>Welcome '.$login_session.'</h1>';
	echo '<h4>Click the link below for data entry</h4>';
	echo '<a href="./dataentry.php">Book Entry</a><br><br>';



// close the secure session
}

include '../src/footer.php';	
?>