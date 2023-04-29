<?php
// Connect to database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$name = $_POST["id"];


// Update data
$sql = "UPDATE articles SET art_status='1' WHERE art_id='$name'";

if (mysqli_query($conn, $sql)) {
	echo "success";
} else {
	echo "Error updating data: " . mysqli_error($conn);
}
mysqli_close($conn);
?>