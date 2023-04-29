 <html>
 <head>
 <title>Signed In</title>
 <link rel="stylesheet" type="text/css" href="css/signup.css">
 </head>

 <body>
 <?php

include 'nvgbar.php';

?>
<br><br>
 <div class="formstyle">
<center>
<h1>Sign In Now!<span>Sign in and start posting!!</span></h1>
</center>
</div>
<?php
include "connect.php";
//session_start();
$errors = array(); /* declare the array for later use */
         
        if(!isset($_POST['username']))
        {
            $errors[] = 'The username field must not be empty.';
        }
         
        if(!isset($_POST['password']))
        {
            $errors[] = 'The password field must not be empty.';
        }
         
        if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
        {
            echo 'Uh-oh.. a couple of fields are not filled in correctly..';
           // echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have a problem while signing up..";
            echo '<ul>';
            foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
            {
                echo '<li>' . $value . '</li>'; /* this generates a nice error list */
            }
            echo '</ul>';
        }
        else
        {
            //the form has been posted without errors, so save it
            //notice the use of mysql_real_escape_string, keep everything safe!
            //also notice the sha1 function which hashes the password
           /* $sql = "SELECT 
                        id,
                        username,
                        user_level
                    FROM
                        users
                    WHERE
                        username = '" . mysql_real_escape_string($_POST['username']) . "'
                    AND
                        password = '" . sha1($_POST['password']) . "'";
                         
            $result = mysql_query($sql);*/
            $user = $_POST['username'];
            $pass = sha1($_POST['password']);
          //  echo "$pass";
            $query = mysql_query("SELECT * FROM users WHERE username='$user'");
            $numrows = mysql_num_rows($query);
            if ($numrows!=0)
            {
            //while loop
            while ($row = mysql_fetch_assoc($query))
            {
            //$dbusername = $row['username'];
            //$dbpassword = $row['password'];
            //echo "$pass";                
             if($pass==$row['password'])
                    {
                        $_SESSION['id']    = $row['id'];
                        $_SESSION['username']  = $row['username'];
                        $_SESSION['user_level'] = $row['user_level'];
                        $_SESSION['signed_in'] = true;
                        //echo 'Welcome, ' . $_SESSION['username'] . '. <a href="posts.php">Proceed to the forum overview</a>.';
                         header("location:index.php");
                    }    
                
              else
                {
                    echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have supplied a wrong user/password combination. Please try again.</p>";
                     echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="signin.php">Sign In again</a></p>';
                }
            }
                    //set the $_SESSION['signed_in'] variable to TRUE
                    //we also put the user_id and user_name values in the $_SESSION, so we can use it at various pages
                   // while($row = mysql_fetch_assoc($result))
                  //  {
                        
                    //}   
            }

            /*if(!$result)
            {
                //something went wrong, display the error
                echo 'Something went wrong while signing in. Please try again later.';
                //echo mysql_error(); //debugging purposes, uncomment when needed
            }*/
            //else
            //{
                //the query was successfully executed, there are 2 possibilities
                //1. the query returned data, the user can be signed in
                //2. the query returned an empty result set, the credentials were wrong
                else
                {
                    echo 'You have supplied a wrong user/password combination. Please try again.';
                }
                //else
                //{
                   //}
            //}
        }
        ?>

        <?php

include 'footer.php';

?>
        </body>
        </html>
