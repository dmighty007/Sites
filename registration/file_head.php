<?php
	session_start();

    $serverName = "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "register";
    
    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
    $fetchData= fetch_data($conn);
    // fetch query
    function fetch_data($conn){
    $query="SELECT * from articles";
    $exec=mysqli_query($conn, $query);
    if(mysqli_num_rows($exec)>0){
        $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
        return $row;  
            
    }else{
        return $row=[];
    }


    }
    $items = array();
    if(count($fetchData)>0){
       
        foreach($fetchData as $data){ 
            $items[] = $data['art_status'];
       }
    
    }

?>

<!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v5.7.8, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/mbr.png" type="image/x-icon">
        <meta name="description" content="">
        <title>autoencoder</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css" rel="stylesheet"/>
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="assets/template/elements.css" rel="stylesheet"/>
  <link href="assets/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet"/>
  <link href="assets/bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet"/>
  <link href="assets/animatecss/animate.css" rel="stylesheet"/>
  <link href="assets/dropdown/css/style.css" rel="stylesheet"/>
  <link href="assets/socicon/css/styles.css" rel="stylesheet"/>
  <link href="assets/theme/css/style.css" rel="stylesheet"/>
  <link as="style" href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" onload="this.onload=null;this.rel='stylesheet'" rel="preload"/>
  <noscript>
   <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet"/>
  </noscript>
  <link as="style" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&amp;display=swap" onload="this.onload=null;this.rel='stylesheet'" rel="preload"/>
  <noscript>
   <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet"/>
  </noscript>
  <link as="style" href="https://fonts.googleapis.com/css?family=Zen+Antique+Soft:400&amp;display=swap" onload="this.onload=null;this.rel='stylesheet'" rel="preload"/>
  <noscript>
   <link href="https://fonts.googleapis.com/css?family=Zen+Antique+Soft:400&amp;display=swap" rel="stylesheet"/>
  </noscript>
  <link as="style" href="assets/mobirise/css/mbr-additional.css" rel="preload"/>
  <link href="assets/mobirise/css/mbr-additional.css" rel="stylesheet" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
  </script>
  <script src="assets/template/my_js.js">
  </script>
  <style>
   * {
            box-sizing: border-box;
        }

        .is-hidden {
            display: none;
        }

        .search-box {
            width: fit-content;
            height: fit-content;
            position: relative;
        }

        .input-search {
            height: 50px;
            width: 50px;
            border-style: none;
            padding: 10px;
            font-size: 18px;
            letter-spacing: 2px;
            outline: none;
            border-radius: 25px;
            transition: all .5s ease-in-out;
            background-color: #22a6b3;
            padding-right: 40px;
            color: rgb(22, 1, 1);
        }

        .input-search::placeholder {
            color: hsl(0, 0%, 0%);
            font-size: 18px;
            letter-spacing: 2px;
            font-weight: 100;
        }

        .btn-search {
            width: 50px;
            height: 50px;
            border-style: none;
            font-size: 20px;
            font-weight: bold;
            outline: none;
            cursor: pointer;
            border-radius: 50%;
            position: absolute;
            right: 0px;
            color: #4507b8;
            background-color: transparent;
            pointer-events: painted;
        }

        .btn-search:focus~.input-search {
            width: 300px;
            border-radius: 0px;
            background-color: transparent;
            border-bottom: 1px solid rgba(5, 49, 243, 0.5);
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
        }

        .input-search:focus {
            width: 300px;
            border-radius: 0px;
            background-color: transparent;
            border-bottom: 1px solid rgba(238, 7, 7, 0.5);
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
        }
  </style>
  <style>
   .center_mode {
            margin: auto;
            width: 60%;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .hideform {
            display: none;
        }

        .filterDiv {
            float: left;
            background-color: #2196F3;
            color: #ffffff;
            width: 100px;
            line-height: 100px;
            text-align: center;
            margin: 2px;
            display: none;
        }

        .show {
            display: block;
        }
  </style>
  <style>
   .center_mode {
            background-color: #104068;
        }

        .cat {
            margin: 4px;
            background-color: #c8d3db;
            border-radius: 4px;
            border: 1px solid rgb(29, 29, 29);
            overflow: auto;
            width: fit-content;
            height: fit-content;
            color: #104068;
            float: left;
        }

        .cat label {
            float: left;

        }

        .cat label span {
            text-align: center;
            color: #104068;
            padding: 1.0em 0;
            display: block;
            padding-left: 20px;
            padding-right: 20px;
        }

        .cat label input {
            position: relative;
            display: none;
            color: rgb(37, 35, 35) !important;
        }

        /* selects all of the text within the input element and changes the color of the text */
        .cat label input+span {
            color: rgb(21, 5, 90);
        }


        /* This will declare how a selected input will look giving generic properties */
        .cat input:checked+span {
            color: #ffffff;
            text-shadow: 0 0 6px rgba(173, 168, 168, 0.8);
        }


        /*
        This following statements selects each category individually that contains an input element that is a checkbox and is checked (or selected) and chabges the background color of the span element.
        */

        .action input:checked+span {
            background-color: #F75A1B;
        }

        .comedy input:checked+span {
            background-color: #1BB8F7;
        }

        .crime input:checked+span {
            background-color: #D9D65D;
        }

        .history input:checked+span {
            background-color: #82D44E;
        }

        .reality input:checked+span {
            background-color: #F3A4CF;
        }

        .news input:checked+span {
            background-color: #8C1B1B;
        }

        .scifi input:checked+span {
            background-color: #AC9BD1;
        }

        .sports input:checked+span {
            background-color: #214A09;
        }
  </style>
  <style>
   .hr5 {
            border: 0;
            border-top: medium double rgb(75, 69, 69);
            height: 1px;
            overflow: visible;
            padding: 5 5 5 5;
            color: rgb(78, 73, 73);
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
  </style>
  <style>
   #button {
            position: relative;
            /*display:block;*/
            height: 45px;
            width: 150px;
            margin: 10px 7px;
            padding: 5px 5px;
            font-weight: 700;
            font-size: 15px;
            letter-spacing: 2px;
            color: #383736;
            border: 2px #383736 solid;
            border-radius: 4px;
            text-transform: uppercase;
            outline: 0;
            overflow: hidden;
            background: none;
            z-index: 1;
            cursor: pointer;
            transition: 0.08s ease-in;
            -o-transition: 0.08s ease-in;
            -ms-transition: 0.08s ease-in;
            -moz-transition: 0.08s ease-in;
            -webkit-transition: 0.08s ease-in;
        }

        .slide:after {
            content: "View Story";
            margin-top: 17px;
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            text-align: center;
            -webkit-transition: all 400ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .slide:before {
            content: "Read it →";
            margin-top: 17px;
            height: 100%;
            width: 100%;
            position: absolute;
            color: #383736;
            left: -100%;
            opacity: 0;
            -webkit-transition: all 500ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .slide:hover {
            background: #383736;
        }

        .slide:hover:before {
            left: 0;
            opacity: 1;
            color: rgb(79, 7, 194);
        }

        .slide:hover:after {
            left: 100%;
            opacity: 0;
        }

        .slide.left:hover {
            background: none;
        }

        .slide.left:before {
            left: 100%;
            color: #383736;
            -webkit-transition: all 425ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .slide.left:hover:before {
            left: 0;
        }


        .slide1:after {
            content: "Check Read";
            margin-top: 17px;
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            text-align: center;
            -webkit-transition: all 400ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .slide1:before {
            content: "Mark it!";
            margin-top: 17px;
            height: 100%;
            width: 100%;
            position: absolute;
            color: #383736;
            left: -100%;
            opacity: 0;
            -webkit-transition: all 500ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .slide1:hover {
            background: #383736;
        }

        .slide1:hover:before {
            left: 0;
            opacity: 1;
            color: rgb(79, 7, 194);
        }

        .slide1:hover:after {
            left: 100%;
            opacity: 0;
        }

        .slide1.left:hover {
            background: none;
        }

        .slide1.left:before {
            left: 100%;
            color: #383736;
            -webkit-transition: all 425ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .slide1.left:hover:before {
            left: 0;
        }
  </style>
  <style>
   div {
            cursor: auto;
        }

        body {
            background-color: rgb(159, 219, 248);
        }

        section {
            padding-top: 0px;
            padding-bottom: 0px;
        }
  </style>
  <style>
   @font-face {
            font-family: ff3;
            src: url('data:application/font-woff;base64,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')format("woff");
        }

        .ff3 {
            font-family: ff3;
            font-size: 20px;
            word-break: break-word;
            line-height: inherit;
            word-spacing: 1px;
            letter-spacing: -0.003em;
            font-style: normal;
            font-weight: normal;
            visibility: visible;
            overflow-wrap: break-word;
            text-rendering: optimizelegibility;
        }
  </style>
  <script>
   function div_show() {
            document.getElementById('abc').style.display = "block";
            document.getElementById('content2-e').style.display = "none";
            //document.getElementById('footer3-d').style.display = 'none';
            document.getElementById('menu3-1').style.display = 'none';
        }
        //Function to Hide Popup
        function div_hide() {
            document.getElementById('abc').style.display = "none";
            document.getElementById('content2-e').style.display = "block";
            //document.getElementById('footer3-d').style.display = 'block';
            document.getElementById('menu3-1').style.display = 'block';
        }
        //Function To Display Popup
        function div_show2() {
            document.getElementById('abc2').style.display = "block";
            var contents = document.getElementsByClassName('content2');
            for (let j = 0; j < contents.length; j++) {
                contents[j].setAttribute('style', 'display:none;padding-top: 0px; padding-bottom: 0px;')
            }
            document.getElementById('features10-j').style.display = 'none';
            document.getElementById('menu3-1').style.display = 'none';

        }
        //Function to Hide Popup
        function div_hide2() {
            document.getElementById('abc2').style.display = "none";
            var contents = document.getElementsByClassName('content2');
            for (let j = 0; j < contents.length; j++) {
                contents[j].setAttribute('style', 'display:block;padding-top: 0px; padding-bottom: 0px;')
            }
            document.getElementById('features10-j').style.display = 'block';
            document.getElementById('menu3-1').style.display = 'block';
        }
        function CheckInclude(orig, check) {
            var flag = false;
            //
            //var check = "ML_DL";
            for (let i = 0; i < orig.length; i++) {
                if (check.includes(orig[i])) {
                    flag = true

                }
            }
            return flag;
        }
  </script>
  <script>
   jQuery(document).ready(function($) {

if (window.history && window.history.pushState) {

  $(window).on('popstate', function() {
    var hashLocation = location.hash;
    var hashSplit = hashLocation.split("#!/");
    var hashName = hashSplit[1];

    if (hashName !== '') {
      var hash = window.location.hash;
      
      if (hash === '') {
        //alert('Back button was pressed.');
          window.location='index.html';
          window.location.reload(); 
          
          return false;
      }
    }
  });

  window.history.pushState('forward', null, 'index.html');
}

});
  </script>
  <script type="text/javascript">
   (function()
    {
      if( window.localStorage )
      {
        if( !localStorage.getItem('firstLoad') )
        {
          localStorage['firstLoad'] = true;
          window.location.reload();
        }  
        else
          localStorage.removeItem('firstLoad');
      }
    })();
  </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
   $(document).ready(function(){
        $(".slide1").click(function(){
            var id = $(this).data("id"); // get the ID value from data attribute

            var par_id = "update-div" + id
            $("#"+par_id).css("background-color", "skyblue");
            $.ajax({
                url:'update.php',
                method:'POST',
                data:{
                    id: id, // add the ID to the data to be sent
                },
                success:function(response){
                }
            });
        });

    });
</script>


 </head>
 <body>
  <section class="menu menu3 cid-sFAA5oUu2Y" data-bs-version="5.1" id="menu3-1" once="menu">
   <nav class="navbar navbar-dropdown navbar-expand-lg" style="background-color:rgba(237, 245, 225, 1.0);position:relative;">
    <div class="container-fluid">
     <div class="navbar-brand">
      <span class="navbar-caption-wrap">
       <a class="navbar-caption text-primary display-5" href="index.html">
        Scrapped
       </a>
      </span>
     </div>
     <button aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
      <div class="hamburger">
       <span>
       </span>
       <span>
       </span>
       <span>
       </span>
       <span>
       </span>
      </div>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="icons-menu">
       <div class="search-box">
        <button class="btn-search">
         <i aria-hidden="true" class="fa fa-search">
         </i>
        </button>
        <input class="input-search" id="searchbox" placeholder="Type to Search..." type="search"/>
       </div>
      </div>
      <div class="navbar-buttons mbr-section-btn">
       <button class="btn btn-danger-outline display-4">
        <a href="feed_page.html">
         <i aria-hidden="true" class="fa fa-rss" style="color: rgb(34, 153, 170);">
         </i>
         Feed
        </a>
       </button>
       <button class="btn btn-danger-outline display-4">
        <a href="login.php">
         <i aria-hidden="true" class="fa fa-sign-in" style="color: rgb(34, 153, 170);">
         </i>
         Login
        </a>
       </button>
       <button class="btn btn-danger-outline display-4">
       <a href="logout.php" >
         <i aria-hidden="true" class="fa fa-sign-out" style="color: rgb(34, 153, 170);">
         </i>
         Logout
        </a>
       </button>

       <button class="btn btn-danger-outline display-4" onclick="div_show2()">
        <span class="socicon socicon-mail mbr-iconfont mbr-iconfont-btn" style="color: rgb(255, 102, 102);">
        </span>
        Request an article!
       </button>
      </div>
     </div>
     <!--<div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="#">
                                Search</a></div>-->
    </div>
   </nav>
  </section>
  <div id="abc2">
   <!-- Popup Div Starts Here -->
   <div id="popupContact2" style="border-color:#fff">
    <section class="form7 cid-ttAgVU2SaT" data-bs-version="5.1" id="form7-d" style="opacity:.95; background-color:#313131;">
     <div class="container">
      <a onclick="div_hide2()">
       <i aria-hidden="true" class="fa fa-times" style="font-size: 40px;color: #ffffff;">
       </i>
      </a>
      <div class="mbr-section-head">
       <h3 class="mbr-section-title mbr-fonts-style text-white align-center mb-0 display-2">
        <strong>
         Paste the link or
                                title!
        </strong>
       </h3>
      </div>
      <div class="row justify-content-center mt-4">
       <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
        <form action="https://mobirise.eu/" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name" method="POST">
         <input data-form-email="true" name="email" type="hidden" value="hX9tKwR+WmipBz/wChYl/QI7bs+5qU28ivd25x9bXhFy+Oxps+ShOaYBMe8GGOF83nmVijCSVkq8MYkoAxJXmbbRNPeHu1t/q79su/G1/Rb0ioyk81Yi7ZGUEWN2sDBG"/>
         <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
          Please paste the link or
                                    the title of the "Medium/Towards Data Science"
                                    article you want here!I Will update shortly.
         </p>
         <div class="row">
          <div class="alert alert-success col-12" data-form-alert="" hidden="hidden">
           Thanks
                                        for
                                        filling out the form!
          </div>
          <div class="alert alert-danger col-12" data-form-alert-danger="" hidden="hidden">
           Oops...! some problem!
          </div>
         </div>
         <div class="dragArea row">
          <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
           <input class="form-control" data-form-field="name" id="name-form7-d" name="name" placeholder="Name" type="text" value=""/>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
           <input class="form-control" data-form-field="email" id="email-form7-d" name="email" placeholder="Email" type="email" value=""/>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="textarea">
           <textarea class="form-control" data-form-field="textarea" id="textarea-form7-d" name="textarea" placeholder="Message"></textarea>
          </div>
          <div class="col-auto mbr-section-btn align-center">
           <button class="btn btn-primary display-4" type="submit">
            Submit
           </button>
          </div>
          <br/>
          <br/>
          <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
           Or
          </p>
          <div class="col-auto mbr-section-btn align-center">
           <button class="btn btn-secondary display-4" onclick="div_hide2()">
            Cancel
           </button>
          </div>
         </div>
        </form>
       </div>
      </div>
     </div>
    </section>
   </div>
  </div>