<?php session_start();
include_once 'included/dbh.inc.php';
define('TITLE',"Dashboard");

$companyName = "BOSONS";

function strip_bad_chars( $input ){
    $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
    return $output;
}

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
  
  
    <title>Academics</title>
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
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
    Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

.main-container {
  padding: 30px;
}

/* HEADING */

.heading {
  text-align: center;
}

.heading__title {
  font-weight: 600;
}

.heading__credits {
  margin: 10px 0px;
  color: #888888;
  font-size: 25px;
  transition: all 0.5s;
}

.heading__link {
  text-decoration: none;
}

.heading__credits .heading__link {
  color: inherit;
}

/* CARDS */

.cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.card {
  margin: 20px;
  padding: 20px;
  width: 500px;
  min-height: 200px;
  display: grid;
  grid-template-rows: 20px 50px 1fr 50px;
  border-radius: 10px;
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.2s;
}

.card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.01);
}

.card__link2 {
    position: relative;
    text-decoration: none;
    color: blue;
}
.card__link,
.card__exit,
.card__icon {
  position: relative;
  text-decoration: none;
  color: rgba(255, 255, 255, 0.9);
}

.card__link::after {
  position: absolute;
  top: 25px;
  left: 0;
  content: "";
  width: 0%;
  height: 3px;
  background-color: rgba(255, 255, 255, 0.6);
  transition: all 0.5s;
}
.card__link2::after {
  position: absolute;
  top: 25px;
  left: 0;
  content: "";
  width: 0%;
  height: 3px;
  background-color:blueviolet;
  transition: all 0.5s;
}
.card__link2:hover::after {
  width: 100%;
}


.card__link:hover::after {
  width: 100%;
}

.card__exit {
  grid-row: 1/2;
  justify-self: end;
}

.card__icon {
  grid-row: 2/3;
  font-size: 30px;
}

.card__title {
  grid-row: 3/4;
  font-weight: 400;
  color: #ffffff;
}
.card__subtitle {
  grid-row: 3/4;
  font-weight: 300;
  color:black;
}
.card__apply {
  grid-row: 4/5;
  align-self: center;
}

/* CARD BACKGROUNDS */

.card-1 {
  background: radial-gradient(#1fe4f5, #3fbafe);
}

.card-2 {
  background: radial-gradient(#fbc1cc, #fa99b2);
}

.card-3 {
  background: radial-gradient(#76b2fe, #b69efe);
}

.card-4 {
  background: radial-gradient(#60efbc, #58d5c9);
}

.card-5 {
  background: radial-gradient(#f588d8, #c0a3e5);
}

/* RESPONSIVE */

@media (max-width: 1600px) {
  .cards {
    justify-content: center;
  }
}


        </style>
  
</head>
<body>
  
<section data-bs-version="5.1" class="menu menu1 cid-tqXMWVJ5Un" once="menu" id="menu1-14">
    

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg" >
        <div class="container">
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
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item hvr-bounce-in" ><a class="nav-link link text-blue display-4" href="index.php">
                        Home
                         <span><i class="fa fa-home" aria-hidden="true"></i></span></a>
                    </li>
                    <li class="nav-item hvr-bounce-in"><a class="nav-link link text-black display-4" href="academic.php">
                        Academics<span><i class='fas fa-book-reader' aria-hidden="true"></i> </span></a>
                    </li>
                    <li class="nav-item hvr-bounce-in"><a class="nav-link link text-red display-4" href="lifestyle.php" style="color:red;">
                        Lifestyle<span><i class="fa fa-heart fa-1x fa-beat"></i></span></a>
                    </li>
                    <li class="nav-item hvr-bounce-in"><a class="nav-link link text-gray display-4" href="others.php" style="color:lightseagreen;">
                        Others <i class="fa fa-list-alt" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item hvr-bounce-in"><a class="nav-link link text-black display-4" href="questions.php">Questions
                        <i class='fas fa-question-circle fa-spin'></i>
                    </a>
                    </li>
                </ul>
                
                <div class="navbar-buttons mbr-section-btn hvr-bounce-in">
                    <a class="btn btn-white display-4" href="included/logout.inc.php ">
                        <span class="mbrib-logout mbr-iconfont mbr-iconfont-btn" style="color: rgb(228, 63, 63);">

                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</section>

        <?php $sql = "select * from categories order by cat_name asc
                                            LIMIT 3";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql))
            {
                die('SQL error');
            } 
            else {
                mysqli_stmt_execute($stmt);

                $result = mysqli_stmt_get_result($stmt);
                $items = array();
                $item_id = array();
                while ($row = mysqli_fetch_assoc($result)) {
                    $items[] = $row['cat_name'];
                    $item_id[] = $row['cat_id'];

                };
                };
        ?>
<!-- 

GRADIENT BANNER DESIGN BY SIMON LURWER ON DRIBBBLE:
https://dribbble.com/shots/14101951-Banners

-->
<div class="main-container">
  <div class="heading">
    <h1 class="heading__title">Academics Related Issues</h1>
    <p class="heading__credits"><a class="heading__link" target="_blank" href="#">The issues posted with the category academic..
    </a></p>
  </div>
  <div class="cards">
    <?php $sql = "select * from topics where topic_cat = $item_id[0]    
                    order by topic_date ";
                            
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql))
                        {
                        die('SQL error');
                        } else {
                        mysqli_stmt_execute($stmt);

                        $result = mysqli_stmt_get_result($stmt);
                        $count = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $mylen = strlen($row['topic_subject']);
                            
            echo '

                <div class="card card-'.$count.'">
                <div class="card__icon"><i class="fa-solid fa-user-graduate"></i></div>
                <p class="card__exit">'. date("F jS, Y", strtotime($row['topic_date'])).'</p>
                <h2 class="card__title">' .substr(ucwords($row['topic_subject']),0,300).'</h2>
                <p class="card__apply">' .substr(ucwords($row['topic_content']),0,300).'</p>
                </div>';
                        $count++;
            }
        }
    ?>
  </div>
</div>

<section data-bs-version="5.1" class="footer7 cid-tqXYxlWr4L" once="footers" id="footer7-15">
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2022 - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  
<script src="assets/parallax/jarallax.js"></script>  
<script src="assets/smoothscroll/smooth-scroll.js"></script>  
<script src="assets/ytplayer/index.js"></script>  
<script src="assets/dropdown/js/navbar-dropdown.js"></script>  
<script src="assets/theme/js/script.js"></script>  
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>