<?php
require_once '../config.inc';
echo "<html><body><h3>Running query...</h3>";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
	
// bulk create blocks
$bx = 1;
$bz = 150;
while ($bx <= $bz) {
	$sql = "INSERT INTO blocks (section_id, cemetery_id, block, block_desc)
		values (1,1,$bx, 'Block $bx')";
	if ($con->query($sql) === TRUE) {
		echo "Record added!<br>";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	$bx++;
	}

$con->close();


echo "</body></html>";
?>