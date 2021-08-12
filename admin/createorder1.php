<?php
// requires and includes
require_once '../config.inc';
include '../src/header.php';
// session_start();

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
    
    //select product table
    $sql = "Select * from product_code";

    if (!empty($_POST[qty]) ){
    // Set counter 
    $x = $_POST[qty];

        // Create well for plots
        echo '<h3>New Order (Step 2)</h3>
        <form class="form-inline" action="createorder2.php" method="POST">
              <input type="hidden" name="qty2" value="'. $_POST[qty] . '">
              
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Property Selection
                </div>
            <div class="panel-body">';

            include './inc/pmt_order_new.php';

        echo '</div></div>';
        
        // Create well for Owner
        echo '<div class="panel panel-primary">
                <div class="panel-heading">
                    Owner/Purchaser Entry
                </div>
            <div class="panel-body">';

            include './inc/pmt_order_owner.php';

        echo '</div></div><button type="submit" class="btn btn-primary">Review ></button></form><br><br>';
        

    } else {
        echo '<h3>Ooops</h3><br>
        Seomething went wrong.';
    }
echo '';


}
include '../src/footer.php';
?>