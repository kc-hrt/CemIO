<?php
require_once '../config.inc';
include '../src/header.php';

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Run Select
if (!empty($_GET['lname']) && !empty($_GET['fname'])){
		$sql = "select firstname, middlename, lastname, suffix, sex, birth_date, birthplace, death_date, deathplace from deceased where lastname like '".'%'.$_GET['lname']. '%'."' AND firstname like '".'%'.$_GET['fname']. '%'."'";
	} // elseif (!empty($_GET['block'] && !empty($_GET['space']) {
	//	$sql = "SELECT property_id, firstname, middlename, lastname, sex, birth_date, birthplace, death_date, deathplace, block, lot from deceased where block =". $_GET['block']."left join on property.id";
	else {
		$sql = "SELECT firstname, middlename, lastname, sex, birth_date, birthplace, death_date, deathplace from deceased where lastname like '".'%'.$_GET['lname'].'%'."'";
	}



$result = $con->query($sql);

// Display search form
echo '<br><br><form class="form-inline" action="../results/" method="GET">
	<div class="form-group">
		<label class="sr-only" for="exampleInputName">First Name</label>
		<input type="text" class="form-control" name="fname" placeholder="First Name">
	</div>
	<div class="form-group">
		<label class="sr-only" for="exampleInputName">Last Name</label>
		<input type="text" class="form-control" name="lname" placeholder="Last Name">
	</div>
	<div class="form-group">
		<label class="sr-only" for="exampleInputName">Block</label>
		<input type="text" class="form-control" name="block" placeholder="Block Number">
	</div>
	<div class="form-group">
		<label class="sr-only" for="exampleInputName">Space Number</label>
		<input type="text" class="form-control" name="space" placeholder="Space Number">
	</div>
	<button type="reset" class="btn btn-default">Cancel</button>
	<button type="submit" class="btn btn-primary">Submit</button>
</form><br>

';


// Display results
if ($result->num_rows > 0) {
	// Build Table
	echo '<table id="example" class="display" cellspacing="0" width="100%">
	        <thead>
	          <tr>
	            <th>Name</th>
	            <th>Sex</th>
	            <th>Date of Birth</th>
	            <th>Place of Birth</th>
	            <th>Date of Death</th>
	            <th>Place of Death</th>
	          </tr>
	        </thead>
	        <tbody>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . trim($row["firstname"]. ' '. $row["middlename"]. ' ' . $row["lastname"].', '.$row["suffix"]). "</td><td>" . $row["sex"]. "</td><td>" . $row["birth_date"]. "</td><td>" . $row["birthplace"]. "</td><td>" . $row["death_date"]. "</td><td>" . $row["deathplace"]. "</td></tr>";
    } 
    
    echo '</tbody></table>';

} else {
   echo 'Search did not return results, please <search again.';
}
$con->close();


include '../src/footer.php';
?>