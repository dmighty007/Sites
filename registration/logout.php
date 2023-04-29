<?php
include 'included/dbh.inc.php';
session_start();
unset($_SESSION['signed_in']);
session_destroy();

header("Location:serb1.php");
exit;
?>