<?php
$serverName = "sql205.epizy.com";
$dBUsername = "epiz_33181135";
$dBPassword = "LFXer8C2z44d8WP";
$dBName = "epiz_33181135_klik_database";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName, 3306);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}

?>