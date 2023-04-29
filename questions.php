<?php session_start();
include_once 'included/dbh.inc.php';
define('TITLE',"Dashboard");

$companyName = "BOSONS";

function strip_bad_chars( $input ){
    $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
    return $output;
}

//if(!isset($_SESSION['userId']))
//{
//    header("Location: login.php");
//    exit();
//}
?>
<head>
    <!-- Site made with Mobirise Website Builder v5.7.4, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.7.4, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">
  
  
    <title>Home</title>
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

ol.gradient-list > li::before, ol.gradient-list > li {
  box-shadow: 0.25rem 0.25rem 0.6rem rgba(0, 0, 0, 0.05), 0 0.5rem 1.125rem rgba(75, 0, 0, 0.05);
}

/*** STYLE ***/
*,
*:before,
*:after {
  box-sizing: border-box;
}

main {
  display: block;
  margin: 0 auto;
  max-width: 40rem;
  padding: 1rem;
}

ol.gradient-list {
  counter-reset: gradient-counter;
  list-style: none;
  margin: 1.75rem 0;
  padding-left: 1rem;
}
ol.gradient-list > li {
  background: white;
  border-radius: 0 0.5rem 0.5rem 0.5rem;
  counter-increment: gradient-counter;
  margin-top: 1rem;
  min-height: 3rem;
  padding: 1rem 1rem 1rem 3rem;
  position: relative;
}
ol.gradient-list > li::before, ol.gradient-list > li::after {
  background: linear-gradient(135deg, #83e4e2 0%, #a2ed56 100%);
  border-radius: 1rem 1rem 0 1rem;
  content: "";
  height: 3rem;
  left: -1rem;
  overflow: hidden;
  position: absolute;
  top: -1rem;
  width: 3rem;
}
ol.gradient-list > li::before {
  align-items: flex-end;
  content: counter(gradient-counter);
  color: #1d1f20;
  display: flex;
  font: 900 1.5em/1 "Montserrat";
  justify-content: flex-end;
  padding: 0.125em 0.25em;
  z-index: 1;
}
ol.gradient-list > li:nth-child(10n+1):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.2) 0%, rgba(253, 220, 50, 0.2) 100%);
}
ol.gradient-list > li:nth-child(10n+2):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.4) 0%, rgba(253, 220, 50, 0.4) 100%);
}
ol.gradient-list > li:nth-child(10n+3):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.6) 0%, rgba(253, 220, 50, 0.6) 100%);
}
ol.gradient-list > li:nth-child(10n+4):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.8) 0%, rgba(253, 220, 50, 0.8) 100%);
}
ol.gradient-list > li:nth-child(10n+5):before {
  background: linear-gradient(135deg, #a2ed56 0%, #fddc32 100%);
}
ol.gradient-list > li:nth-child(10n+6):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.8) 0%, rgba(253, 220, 50, 0.8) 100%);
}
ol.gradient-list > li:nth-child(10n+7):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.6) 0%, rgba(253, 220, 50, 0.6) 100%);
}
ol.gradient-list > li:nth-child(10n+8):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.4) 0%, rgba(253, 220, 50, 0.4) 100%);
}
ol.gradient-list > li:nth-child(10n+9):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.2) 0%, rgba(253, 220, 50, 0.2) 100%);
}
ol.gradient-list > li:nth-child(10n+10):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0) 0%, rgba(253, 220, 50, 0) 100%);
}
ol.gradient-list > li + li {
  margin-top: 2rem;
}

.text-rainbow-animation {
  font-family:arial black;
  font-size:30px;
  background-image: 
    linear-gradient(to right, red,orange,yellow,green,blue,indigo,violet, red); 
  -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;  
  animation: rainbow-animation 105s linear infinite;
}
@keyframes rainbow-animation {
    to {
        background-position: 4500vh;
    }
}

#p1{
  display:inline-block;
  width:100%;
  margin:5% auto;
  
  padding:1em;
  line-height:1.5em;
}
#one {
  border-radius: 255px 15px 225px 15px/15px 225px 15px 255px;
  border:solid 5px hsla(0, 95%, 35%, 1);
}
:root {
    --bg: #fdfdfd;
    --highlight1: #ED4264;
    --highlight2: #FFEDBC;
    --color: #1a1e24;
    --font-number: Montserrat, Roboto, Helvetica, Arial, sans-serif;
    --font-head: "Space Mono", Consolas, Menlo, Monaco, "Courier New", monospace;
    --font: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

.list {
    list-style: none;
    max-width: 90%;
}

.item {
    display: block;
    clear: both;
    counter-increment: list;
    padding-bottom: 1rem;
    font-size: 1.1rem;
    line-height: 1.375;
    position: relative;
}

        .hr5 {
            border: 0;
            border-top: medium double rgb(255, 255, 255);
            height: 1px;
            overflow: visible;
            padding: 5 5 5 5;
            color: blue;
            text-align: center;
        }

        .hr5::after {
            content: "¶";
            display: inline-block;
            position: relative;
            top: -0.7em;
            font-size: 1.4em;
            padding: 0 0.3em;
            background: white;
        }
        .hr6 {
            border: 0;
            border-top: medium double rgb(255, 255, 255);
            height: 1px;
            overflow: visible;
            padding: 5 5 5 5;
            color: blue;
            text-align: center;
        }

        .hr6::after {
            content: "***";
            display: inline-block;
            color:black;
            position: relative;
            top: -0.7em;
            font-size: 2.0em;
            padding: 0 0.1em;
            background: hsla(67, 95%, 95%, 1);
        }
        .knockout {
  
        vertical-align: middle;
        text-align: center;
        font-family: 'Pacifico', cursive;
        font-size:40pt;
        color: blue;
        color: #fff;
        background: linear-gradient(110deg, lime 32%, rgba(0, 0, 0, 0) 33%), linear-gradient(110deg,blue 34%, red 34%);
        background-size: 400%;
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
        }
        .knockout{
    animation: Gradient 2.5s ease infinite;
    -webkit-animation: Gradient 5s ease infinite;
    -moz-animation: Gradient 2.5s ease infinite;
        }

        @-webkit-keyframes Gradient {
            0% {
                background-position: 30% 50%
            }
            50% {
                background-position: 25% 50%
            }
            100% {
                background-position: 30% 50%
            }
            
            }


</style>
  
</head>


<body style="overflow:visible;scroll-behavior:auto;">
  
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
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <!--<li class="nav-item hvr-bounce-in" ><a class="nav-link link text-blue display-4" href="index.php">
                        Home <span><i class="fa fa-home" aria-hidden="true"></i></span></a>
                    </li>
                    <li class="nav-item hvr-bounce-in"><a class="nav-link link text-black display-4" href="academic.php">
                        Academics<span><i class='fas fa-book-reader' aria-hidden="true"></i> </span></a>
                    </li>
                    <li class="nav-item hvr-bounce-in"><a class="nav-link link text-red display-4" href="lifestyle.html" style="color:red;">
                        Lifestyle<span><i class="fa fa-heart fa-1x fa-beat"></i></span></a>
                    </li>
                    <li class="nav-item hvr-bounce-in"><a class="nav-link link text-gray display-4" href="others.html" style="color:lightseagreen;">
                        Others <i class="fa fa-list-alt" aria-hidden="true"></i></a>
                    </li>-->
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



<section data-bs-version="5.1" class="content16 cid-tqWFpXmtLI mbr-parallax-background" id="content16-o">

    

    
    <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(255, 255, 255);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="mbr-section-head align-center mb-4">
                    <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2" style="color:brown;">
                        <strong>Questions and answers about BOSONS</strong>
                    </h3>
                    
                </div>
                <div id="bootstrap-accordion_22" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    <div class="card mb-3">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse1_22" aria-expanded="false" aria-controls="collapse1">
                                <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>Why to trust BOSONS?</strong>
                                </h6>
                                <span class="sign mbr-iconfont mbri-arrow-down"></span>
                            </a>
                        </div>
                        <div id="collapse1_22" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_22">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-4">The number of items is limited in this block. Open
                                    the Block parameters to change the amount of items.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse2_22" aria-expanded="false" aria-controls="collapse2">
                                <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>Why is BOSONS at the first place?
                                    </strong></h6>
                                <span class="sign mbr-iconfont mbri-arrow-down"></span>
                            </a>
                        </div>
                        <div id="collapse2_22" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_22">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-4">
                               Some arbitrary sentence. Some arbitrary sentence.Some arbitrary sentence.Some arbitrary sentence.Some arbitrary sentence.
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse3_22" aria-expanded="false" aria-controls="collapse3">
                                <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>How can I raise my questions?</strong></h6>
                                <span class="sign mbr-iconfont mbri-arrow-down"></span>
                            </a>
                        </div>
                        <div id="collapse3_22" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_22">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-4">
                                    Use the "RAISE YOUR QUESTIONS" button.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse4_22" aria-expanded="false" aria-controls="collapse4">
                                <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>What will happen if I raise a question?</strong></h6>
                                <span class="sign mbr-iconfont mbri-arrow-down"></span>
                            </a>
                        </div>
                        <div id="collapse4_22" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_22">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-4">
                                    This extension allows editing the code of block in the app. Also, it's possible to
                                    add code to the head and body parts of pages.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse5_22" aria-expanded="false" aria-controls="collapse5">
                                <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>Can I trust you?
                                    </strong></h6>
                                <span class="sign mbr-iconfont mbri-arrow-down"></span>
                            </a>
                        </div>
                        <div id="collapse5_22" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_22">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-4">
                                    Some motivational bullshit.Some motivational bullshit.Some motivational bullshit.Some motivational bullshit.Some motivational bullshit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse6_22" aria-expanded="false" aria-controls="collapse6">
                                <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>What is our vision?</strong></h6>
                                <span class="sign mbr-iconfont mbri-arrow-down"></span>
                            </a>
                        </div>
                        <div id="collapse6_22" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_22">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-4">
                                    Yet to decide.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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