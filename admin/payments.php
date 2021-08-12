<?php
// requires and includes
require_once '../config.inc';
include '../src/header.php';
// session_start();

echo '<h3>Payments</h3>';

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
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

//
// Main Content when logged in
//
echo '<a href="./crateinvoice.php">Create Invoice</a>';
	
	
	// get table of users
	include './inc/setup_users_view.php';
	// Get add user form
	include './inc/setup_users_add.php';
	// Get add user form
	include './inc/setup_users_add.php';
	// Get add user form
	include './inc/pmt_create.php';
	// Get add product code
	include './inc/pmt_product_code.php';

include '../src/footer.php';
}
?>