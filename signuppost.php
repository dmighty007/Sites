<html>
<head>
<title>Sign up complete</title>
<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>

<body>
<?php

include 'nvgbar.php';

?>
<br><br>
<div class="formstyle">
<center>
<h1>Sign Up Now!<span>It is completely free and will take less then 30 Seconds!!</span></h1>
</center>
</div>

<?php
include "connect.php";

 $errors = array(); /* declare the array for later use */
     $name=$_POST['username'];
    if(isset($name))
    {
        //check for unique username 

        $sql=mysql_query("SELECT username FROM users WHERE username='$name'");
        if($sql)
        {
            $num_rows=mysql_num_rows($sql);
        }
        
        
        if($num_rows >=1)
        {
            $errors[] = 'This username already exist.';
        }
        
        if(!ctype_alnum($_POST['username']))
        {
            $errors[] = 'The username can only contain letters and digits.';
        }
        if(strlen($_POST['username']) > 30)
        {
            $errors[] = 'The username cannot be longer than 30 characters.';
        }
    }
    else
    {
        $errors[] = 'The username field must not be empty.';
    }
     
     
    if(isset($_POST['password']))
    {
        if($_POST['password'] != $_POST['password_check'])
        {
            $errors[] = 'The two passwords did not match.';
        }

        if(strlen($_POST['password']) > 20)
        {
            $errors[] = 'The Password cannot be longer than 30 characters.';
        }

        if(strlen($_POST['password']) < 8)
        {
            $errors[] = 'The Password cannot be smaller than 8 characters.';
        }
    }
    else
    {
        $errors[] = 'The password field cannot be empty.';
    }
     
    if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
    {
        echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have a problem while signing up..</p>";
        foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
        {
            echo '<p style="text-align:center; font-size:19px; font-weight:bold; color:red;">' . $value . '</p>'; /* this generates a nice error list */
        }
        echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="signup.php">Sign Up again</a></p>';
    }
    else
    {
        //the form has been posted without, so save it
        //notice the use of mysql_real_escape_string, keep everything safe!
        //also notice the sha1 function which hashes the password
        $name=$_POST['name'];
        $username=$_POST['username'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $password=sha1($_POST['password']);
        $contact=$_POST['contact'];
        
        $db=new PDO("mysql:host=localhost;dbname=techon","root","");
        if($db)
        {
             $sql = "INSERT INTO
                    users(name,username,gender,email,password,contact,udate, user_level)
                VALUES(?,?,?,?,?,?,?,0)";
             $test=$db->prepare($sql);
             $test->bindParam(1,$name);
             $test->bindParam(2,$username);
             $test->bindParam(3,$gender);
             $test->bindParam(4,$email);
             $test->bindParam(5,$password);
             $test->bindParam(6,$contact);
             $test->bindParam(7,date(y/m/d));
             if($test->execute())
             header("location: signin.php");
             else
              echo 'Something went wrong while registering. Please try again later.';

        }
        else
        {
            //something went wrong, display the error
            echo 'Something went wrong while registering. Please try again later.';
            //echo mysql_error(); //debugging purposes, uncomment when needed
        }
        
}
?>
<br><br>
<?php

include 'footer.php';

?>
</body>
</html>

