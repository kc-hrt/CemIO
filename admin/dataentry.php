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

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (!empty($_POST['lname']) && !empty($_POST['block']) && !empty($_POST['lot'])){
	
	// Create Property ID based on CemeteryID, SectionID, BlockID and LotID
	$prop = '0101-'. str_pad($_POST[block], 3,"0",STR_PAD_LEFT) . '-' . str_pad($_POST[lot], 2,"0",STR_PAD_LEFT);
	
	//Create unique ID for deseased record
	$did = base_convert(time(),10,36);
	
	// Insert for property
	$sql = "INSERT INTO property (id
				,cemetery_id
				,section
				,block
				,lot
				,lot_type
				,notes)
			values ('$prop'
				,1
				,1
				,'$_POST[block]'
				,'$_POST[lot]'
				,'Standard'
				,'$_POST[pnotes]')";
    
	
	// Insert for deseased
	$sql1 = "INSERT INTO deceased (id
				,property_id
				,firstname
				,middlename
				,lastname
				,suffix
				,sex
				,birth_date
				,death_date
				,birthplace
				,deathplace
				,notes)
			values ('$did'
				,'$prop'
				,'$_POST[fname]'
				,'$_POST[mname]'
				,'$_POST[lname]'
				,'$_POST[suffix]'
				,'$_POST[sex]'
				,'$_POST[dob]'
				,'$_POST[dod]'
				,'$_POST[pob]'
				,'$_POST[pod]'
				,'$_POST[dnotes]')";
    
		
	if ($con->query($sql) === TRUE && $con->query($sql1) === TRUE) {
		echo "Record added!";
        echo '<br><br>ID#1 =' . $con->insert_id;
    echo '<br><br>ID#2 =' . mysqli_insert_id($con);
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			echo "Error: " . $sql1 . "<br>" . $conn->error;
		}
		
		
} else {
	// Reminder to enter the require minimums
	echo "<h3>Enter minimum of:</h3>Block, Lot and last name<br>";
	}

$con->close();
	
echo '<br>
<form class="form-inline" action="" method="POST">
	<div class="form-group">
		<label class="sr-only" for="exampleInputName">Block Number</label>
		<input type="number" class="form-control" name="block" placeholder="Block Number">
	</div>
	<div class="form-group">
		<label class="sr-only" for="exampleInputName">Lot Number</label>
		<input type="number" class="form-control" name="lot" placeholder="Lot Number">
	</div><br>
	<div class="form-group">
		<label class="sr-only" for="exampleInputName">First Name</label>
		<input type="text" class="form-control" name="fname" placeholder="First Name">
	</div>
	<div class="form-group">
		<label class="sr-only" for="exampleInputName">Middle Name</label>
		<input type="text" class="form-control" name="mname" placeholder="Middle Name">
	</div>
	<div class="form-group">
		<label class="sr-only" for="exampleInputName">Last Name</label>
		<input type="text" class="form-control" name="lname" placeholder="Last Name">
	</div>
	<div class="form-group">
		<label class="sr-only" for="exampleInputName">Suffix</label>
		<input type="text" class="form-control" name="suffix" placeholder="Suffix (Jr., Sr., etc)">
	</div>Sex: 
	<div class="form-group">
		<label class="sr-only" for="exampleInputName">Sex</label>
		<select type="text" class="form-control" name="sex">
		<option></option>
		<option>Male</option>
		<option>Female</option>
		</select>
	</div><br>
	Date of Birth: 
	<div class="form-group">
		<label class="sr-only" for="exampleInputName">Date of Birth</label>
		<input type="date" class="form-control" name="dob" placeholder="Date of Birth">
	</div><br>Date of Death: 
	<div class="form-group">
		<label class="sr-only" for="exampleInputName">Date of Death</label>
		<input type="date" class="form-control" name="dod" placeholder="Date of Death">
	</div><br><br>
	<div class="form-group">
		<label class="sr-only" for="exampleInputName">Birth Place</label>
		<input type="text" class="form-control" name="pob" placeholder="Birth Place">
	</div>
	<div class="form-group">
		<label class="sr-only" for="exampleInputName">Place of Death</label>
		<input type="text" class="form-control" name="pod" placeholder="Place of Death">
	</div><br>s = Spelling questions<br>
	x = Date of Death questions<br>
	if you use another short code to make note of common problems please let me know <a href=mailto:kaseyhart85@gmail.com>kaseyhart85@gmail.com</a><br>
	<div class="form-group">
		<label class="sr-only" for="comment">Person Notes</label>
		<textarea class="form-control" rows="4" name="dnotes" placeholder="Notes about deceased"></textarea>
	</div><br><br>
	<div class="form-group">
		<label class="sr-only" for="comment">Person Notes</label>
		<textarea class="form-control" rows="4" name="pnotes" placeholder="Property or lot related notes"></textarea>
	</div><br><br>
	
	<button type="reset" class="btn btn-default">Clear</button>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>';

 
 
include '../src/footer.php';
}
?>