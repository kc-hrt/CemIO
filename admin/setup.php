<?php
// requires and includes
require_once '../config.inc';
include '../src/header.php';
session_start();

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

echo '<h2>Setup</h2>';
echo '
<ul class="nav nav-tabs">
	<li class="active"><a href="#property" data-toggle="tab">Property</a>
	</li>
	<li><a href="#users" data-toggle="tab">Users</a>
	</li>
	<li><a href="#messages" data-toggle="tab">Messages</a>
	</li>
	<li><a href="#settings" data-toggle="tab">Settings</a>
	</li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane fade in active" id="property">
        <h4>Property Management</h4>';
        include './inc/setup_prop_add_lot.php';

echo '	
    </div>
    <div class="tab-pane fade" id="users">
        <h4>User Management</h4>';
        // get table of users
        include './inc/setup_users_view.php';
		echo '<h4>Add New User</h4>';
		// Get add user form
	    require './inc/setup_users_add.php';
	    
echo '
    </div>
    <div class="tab-pane fade" id="messages">
        <h4>Messages Tab</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="tab-pane fade" id="settings">
        <h4>Settings Tab</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>
';



include '../src/footer.php';
}
?>