<?PHP
// Run Select
$sql = "SELECT user.username
	,user.name
from user";

$result = $con->query($sql);



// Display results
if ($result->num_rows > 0) {
	// Build Table
	echo '<table id="example" class="display" cellspacing="0" width="100%">
	        <thead>
	          <tr>
	            <th>Name</th>
	            <th>Username</th>
	            <th>Edit(dev)</th>
	          </tr>
	        </thead>
	        <tbody>';
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row["name"]. '</td><td>' . $row["username"]. '</td><td><a href="#">Edit</a></td></tr>';
    } 
    
    echo '</tbody></table>';

} else {
   echo 'Search did not return results -- '.die("Connection failed: " . $con->connect_error).'';
}

?>