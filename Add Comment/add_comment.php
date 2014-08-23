<?php //read data
// Connection with database
$mysqli = new mysqli("localhost", "root", "root", "db_name");
// Catch any errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
// Check if message is set    
if (isset($_POST['message'])) {
    //Get user from Form 
    $user=$mysqli->real_escape_string($_POST['user']);
	//Get post from Form
    $message=$mysqli->real_escape_string($_POST['message']);
	//Get date
	$date=date('Y-m-d H:i:s');
    //Write info in database
    $sql="INSERT INTO tableName(id, user, message, date) VALUES(0,'$user','$message','$date')";
    $mysqli->query($sql);
}

?>

<?php //visualise data
$sql = "SELECT * FROM tableName";
$result = $mysqli->query($sql);
// Print Data into browser
while($row = $result->fetch_assoc()) {
  echo $row['user'].',  '.$row['date'].' <br />';
  echo $row['message'].'<br />';
  echo '<hr />';
}
?>