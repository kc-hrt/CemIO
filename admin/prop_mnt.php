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
	<li class="active"><a href="#open" data-toggle="tab">Open Graves</a>
	</li>
	<li><a href="#graves" data-toggle="tab">Graves</a>
	</li>
	<li><a href="#gtype" data-toggle="tab">Grave Type</a>
	</li>
	<li><a href="#blocks" data-toggle="tab">Blocks</a>
	</li>
	<li><a href="#sections" data-toggle="tab">Sections</a>
	</li>
	<li><a href="#cemetery" data-toggle="tab">Cemetery</a>
	</li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane fade in active" id="open">
        <h4>Property Management</h4>';
        require_once './inc/prop_open_grave.php';

echo '	
    </div>
    <div class="tab-pane fade in active" id="graves">
        <h4>Add/Edit Graves</h4>';
        require_once './inc/prop_grave.php';

echo '	
    </div>
    <div class="tab-pane fade in active" id="gtype">
        <h4>Add/Edit Grave Types</h4>';
        require_once './inc/prop_gravetype.php';

echo '	
    </div>
    <div class="tab-pane fade" id="blocks">
        <h4>Add/Edit Blocks</h4>';
	    require_once './inc/setup_block.php';
	    
echo '
    </div>
    <div class="tab-pane fade" id="sections">
        <h4>Add/Edit Sections</h4>';
        require_once './inc/prop_section.php';

echo '
    </div>
    <div class="tab-pane fade" id="cemetery">
        <h4>Add/Edit Cemetery</h4>';
        require_once './inc/prop_cem.php';
        
echo '
    </div>
</div>
';



include '../src/footer.php';
}
?>