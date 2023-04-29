<?php
//connect.php
$server = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'techon';
 
if(!mysqli_connect($server, $username,  $password, $database))
{
    exit('Error: could not establish database connection');
    echo "error";
}
//if(!mysqli_select_db($database))
//{
//    exit('Error: could not select the database');
//    echo "error";
//}
?>
