<?php session_start();
require 'dbh.inc.php';
$blog_id=$_GET['id'];
$sql = "select * from blogs where blog_id=$blog_id";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
$blogby = $row['blog_by'];

//mysqli_stmt_close($stmt);
if (($blogby == $_SESSION['userId']) && isset($_SESSION['userId']) || ($_SESSION['userLevel']==1))
    {   $sql1 = "DELETE FROM blogvotes WHERE voteBlog=" . $blog_id . "";
        //$sql = "DELETE FROM blogs WHERE blog_id=20";
        if (mysqli_query($conn, $sql1)) {
            $sql2 = "DELETE FROM blogs WHERE blog_id=" . $blog_id . "";
            if (mysqli_query($conn, $sql2)) {
                header("Location: ../hub.php?");
                exit();
            }

        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
else
    {
        header("Location: ../hub.php?");
        exit();
    }