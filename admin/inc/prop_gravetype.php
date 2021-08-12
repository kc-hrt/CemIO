<?PHP
// Run Select
$sql = "SELECT lot_type
	,lot_description
from grave_type";

$result = $con->query($sql);



// Display results
if ($result->num_rows > 0) {
	// Build Table
	echo '<table id="table-responsive" class="table" cellspacing="0" width="100%">
	        <thead>
	          <tr>
	            <th>Grave Type</th>
	            <th>Grave Description</th>
	          </tr>
	        </thead>
	        <tbody>';
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["lot_type"]. "</td><td>" . $row["lot_description"]. "</td><td><a href=\"#\">Edit</a></td></tr>";
    } 
    
    echo '</tbody></table>';

} else {
   echo 'Search did not return results -- '.die("Connection failed: " . $con->connect_error).'';
}

echo '<h5>Add New Grave Type</h5>';
//if (!empty($_POST['name']) && !empty($_POST['uname']) && !empty($_POST['pass'])){
// Insert new user
$sql = "INSERT INTO grave_type (id
			,lot_type
			,lot_description)
		values (0
			,'$_POST[gtype]'
			,'$_POST[desc]')";
//
//} else {
//	// Reminder to enter the required fields
//	echo "<h5>Enter minimum of:</h5>Block, Lot and last name<br>";
//	}


// Display add user form
echo '<br><br>
	<form class="form-inline" action="#" method="POST">
		<div class="form-group">
			<label class="sr-only" for="exampleInputName">Grave Type</label>
			<input type="text" class="form-control" name="gtype" placeholder="Grave Type"required>
		</div>
		<div class="form-group">
			<label class="sr-only" for="exampleInputName">Grave Description</label>
			<input type="text" class="form-control" name="desc" placeholder="Description" required>
		</div>
		
		<button type="reset" class="btn btn-default">Clear</button>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form><br>';


?>