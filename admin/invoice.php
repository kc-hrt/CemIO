<?php
// requires and includes
require_once '../config.inc';
include '../src/header.php';


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

// counts number of plots from the invoice page
$x = count($_POST["block"]); 

//loads php to write data from invoice page to db
include './inc/pmt_order_write.php';
    
// loads php to display the invoice from db for printing
include './inc/pmt_order_read.php';
    

    
    
    
    

}
include '../src/footer.php';
?>