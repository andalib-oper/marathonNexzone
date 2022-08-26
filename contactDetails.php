<html>
	<head>hey there</head>
		<body>
</body>
<html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "marathon_nexzone";

// CREATE CONNECTION
$conn = new mysqli($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
// SQL QUERY
$query = "SELECT * FROM `pre_register`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

		// OUTPUT DATA OF EACH ROW
		while($row = $result->fetch_assoc())
		{
			echo " Name: " .$row["name"]. 
            " | Email: " .$row["email"]. 
            " | mobile: " .$row["phoneNumber"]. "<br>";
          }

$conn->close();

?>

