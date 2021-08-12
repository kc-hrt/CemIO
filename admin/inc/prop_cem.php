<?PHP
echo 'This is where you would add Cemetery';
// Run Select
$sql = "SELECT cemetery_name
	,cemetery_description
from cemetery";

$result = $con->query($sql);



// Display results
if ($result->num_rows > 0) {
	// Build Table
	echo '<table id="table-responsive" class="display" cellspacing="0" width="100%">
	        <thead>
	          <tr>
	            <th>Cemetery Name</th>
	            <th>Cemetery Description</th>
	          </tr>
	        </thead>
	        <tbody>';
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["cemetery_name"]. "</td><td>" . $row["cemetery_description"]. "</td><td><a href=\"#\">Edit</a></td></tr>";
    } 
    
    echo '</tbody></table>';

} else {
   echo 'Search did not return results -- '.die("Connection failed: " . $con->connect_error).'';
}

?>