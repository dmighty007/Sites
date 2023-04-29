<html>
<head>
<title>Welcome to Web Development</title>
<link rel="stylesheet" type="text/css" href="../css/category.css">
<style>
.divigr:hover{
	background-color:#e6f2ff;
	width:60%;
	transition-duration: 0.4s;
	margin-left:25px;
}
.divigr
{
	margin-left:15px;
}
</style>
</head>
<body>
<?php

include 'nvgbar2.php';

?>
<br><br>
<div class="formstyle">
<center>
<h1>Web Development<span>Dive into the sea of Web Development !!</span></h1>
</center>
</div>
<div class="maimage">
<img src="../images/web_home.png" alt="Web Development" width="100%" height="340px" style="display: block;
    margin: auto;">
</div>
<br>
<br>
<div class="description">
<i>Web development is the coding or programming that enables website functionality, per the owners requirements. It mainly deals with the non-design aspect of building websites, which includes coding and writing markup.
<br>
Web development ranges from creating plain text pages to complex Web-based applications, social network applications and electronic business applications.</i>
</div>
<div>
<center>
<p style="color:White; font-size:300%; font-family:verdana; background-color:powderblue;">Latest Discussions</p>
</center>
</div>
<?php
include "../connect.php";
//echo "<p>Latest Discussion<p>";
$cat='web';
 $query = mysql_query("SELECT * FROM topics WHERE topic_cat='$cat' ORDER BY topic_date DESC LIMIT 3");
//$result = mysql_query($query);
//$numrows = mysql_num_rows($sql);

if(!$query)
{
	echo 'error';
}
else
{
	while($row = mysql_fetch_assoc($query))
	{
		$by=$row['topic_by'];
		$date=$row['topic_date'];
		$sub=$row['topic_subject'];
		$id=$row['topic_id'];
		echo "<div style:'width:60%;' class='divigr'>";
		echo "<h1><a href='../topic.php?posts_topic=$id' style='color:black; text-decoration:none;'>$sub</a></h1><br>";
		$query2 = mysql_query("SELECT username FROM users WHERE id='$by'");
		while($row2 = mysql_fetch_assoc($query2))
		{
			$name=$row2['username'];
			echo "<h3>Asked by: $name</h3><h3>On ";
			echo date('d-m-Y', strtotime($date));
			echo "</h3><br>";
		}
		echo "</div>";
		echo "<hr style='width:60%; float:left;'><br>";
		//echo "<br><br><br><br><br>";
		
	}
}
echo "<br><br><br>";


?>


</body>
<?php

include 'footer.php';

?>
</html>
