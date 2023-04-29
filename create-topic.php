<?php session_start();
    include_once 'included/dbh.inc.php';
    
    define('TITLE',"Create Forum ");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    ?>  
<head>
    <!-- Site made with Mobirise Website Builder v5.7.4, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.7.4, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">
  
  
    <title>Forum</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/parallax/jarallax.css">
    <link rel="stylesheet" href="assets/animatecss/animate.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
  
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Spectral+SC:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral+SC:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap"></noscript>
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"></noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/comp-creation.css">
    <style>
         /* Bounce In */
         .hvr-bounce-in {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        -webkit-transition-duration: 0.5s;
        transition-duration: 0.5s;
        }
        .hvr-bounce-in:hover, .hvr-bounce-in:focus, .hvr-bounce-in:active {
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
        -webkit-transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
        transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
        }

    </style>



        
</head>

<body>

    
<section data-bs-version="5.1" class="menu menu1 cid-tqXMWVJ5Un" once="menu" id="menu1-14">
    

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg" >
        <div class="container-fluid">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="index.php">BOSONS</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="sibling-fade navbar-nav nav-dropdown" data-app-modern-menu="true">
                   
                    <li class="nav-item hvr-bounce-in"><a class="nav-link link text-black display-4" href="questions.php">Questions
                        <i class='fas fa-question-circle fa-spin'></i>
                    </a>
                    </li>
                </ul>
                
                <?php 
                if(!isset($_SESSION['userId']))
                    {
                    echo '<div class="navbar-buttons mbr-section-btn hvr-bounce-in">
                        <a class="btn btn-primary display-9" href="login.php ">
                            Login!
                        </a>
                    </div>';
                    }
                else
                    {
                        echo '<div class="navbar-buttons mbr-section-btn hvr-bounce-in">
                            <a class="btn btn-danger display-9" href="included/logout.inc.php ">
                                Sign out!
                            </a>
                        </div>';
                        }


                ?>
            </div>
        </div>
    </nav>
</section>

   
<section>
    <div class="bg-contact2" style="background-image: url('img/banner.png');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form" method="post"  action="included/create-topic.inc.php">
					<span class="contact2-form-title">
						Create A Forum
					</span>
                                    
                    <span class="text-center">
                        <?php
                            if(isset($_GET['error']))
                            {
                                if($_GET['error'] == 'emptyfields')
                                {
                                    echo '<h5 class="text-danger">*Fill In All The Fields</h5>';
                                }
                                else if ($_GET['error'] == 'sqlerror')
                                {
                                    echo '<h5 class="text-danger">*Website Error: Contact admin to have the issue fixed</h5>';
                                }
                            }
                            else if (isset($_GET['operation']) == 'success')
                            {
                                echo '<h5 class="text-success">*Forum successfully created</h5>';
                            }
                        ?>
                    </span>
                                    
                    <?php
                        $sql = "select cat_id, cat_name from categories;";
                        $stmt = mysqli_stmt_init($conn);    

                        if (!mysqli_stmt_prepare($stmt, $sql))
                        {
                            die('sql error');
                        }
                        else
                        {
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            if (mysqli_num_rows($result) == 0)
                            {
                                echo "<h5 class='text-center text-muted'>You cannot create a topic before the admin creates "
                                . "some categories</h5>";
                            }
                            else
                            {
                    ?>
                    
                                    

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="topic-subject">
						<span class="focus-input2" data-placeholder="Forum Subject"></span>
					</div>
                                    

                                        <label>Category</label>
                                        <select  class="form-control" name="topic-cat" style="font-size:15px">
                                        <option selected>Select the category</option>
                                        <?php 
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                echo '<option value='.$row['cat_id'].'>' . $row['cat_name'] . '</option>';
                                            }
                                        ?>
                                        </select><br><br>

                                        
                    <p class=""><a href="create-category.php">*Not in category list? Create one now!!</a></p>                
					<div class="wrap-input2 validate-input" data-validate = "Description is required">
						<textarea class="input2" name="post-content"></textarea>
						<span class="focus-input2" data-placeholder="Forum Question"></span>
					</div>


					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
                                                        <button class="contact2-form-btn" type="submit" name="create-topic">
								Create Forum
							</button>
						</div>
					</div>
                                    
                                    
                                    
                                    <?php
                                            }
                                        }
                                    ?>
                                        
                                    <div class="text-center">
                                        <br><br><a class="btn btn-primary btn-lg btn-block" href="index.php">
                                            View Forums</a>
                                    </div>
				</form>
			</div>
		</div>
	</div>
    </section>
    
        
	    <script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
        <script src="js/creation-main.js"></script>
    </body>
</html>
