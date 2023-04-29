<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "register";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}

$sql = "UPDATE articles SET art_status='10' WHERE art_id=2";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
$query = "SELECT * FROM articles;";
$result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            echo
                $row["art_id"]. " - Name: " .
                $row["art_status"]. " | City: " . 
                $row["art_title"]. " | Age: " ;
        }
    } 
    else {
        echo "0 results";
    }