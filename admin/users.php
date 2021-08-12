<?php
// requires and includes
require_once '../config.inc';
include '../src/header.php';
session_start();

echo '<h3>User Management</h3>';

// Check for logged in
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

//
// When Logged in

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

//
// Main Content when logged in
//
	
	// get table of users
	include './inc/setup_users_view.inc';
	echo '<h4>Add New User</h4>';
	// Get add user form
	require './inc/setup_users_add.inc';

include '../src/footer.php';
}
?>