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
  <!-- Site made with Mobirise Website Builder v5.7.8, https://mobirise.com -->
  <meta charset="utf-8"/>
  <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
  <meta content="Mobirise v5.7.8, mobirise.com" name="generator"/>
  <meta content="width=device-width, initial-scale=1, minimum-scale=1" name="viewport"/>
  <link href="assets/images/mbr.png" rel="shortcut icon" type="image/x-icon"/>
  <meta content="" name="description"/>
  <title>
   Feed
  </title>
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
  <section class="features9 cid-tvA5SQ6yVu mbr-parallax-background" data-bs-version="5.1" id="features10-j">
   <!-- -->
   <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(190, 211, 249);">
   </div>
   <div class="container">
    <div class="mbr-section-head">
     <br/>
     <br/>
     <h3 class="mbr-section-title mbr-fonts-style text-black mb-0 display-2">
      <strong>
       Articles related to
       <em style="color:red;">
        "AutoEncoder"
       </em>
      </strong>
     </h3>
    </div>
    <hr class="hr5"/>
    <div class="row mt-4">
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Variational embedding of
                                        protein folding simulations using gaussian mixture variational
                                        autoencoders
          </strong>
         </h4>
         <h7 style="color:blue;">
          ArXiv
         </h7>
         <p class="text-muted">
          <em>
           Mahdi Ghorbani and Samarjeet Prasad and Jeffery B. Klauda and
                                        B. Brooks
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Conformational sampling of biomolecules using molecular dynamics simulations often
                                produces large amount of high dimensional data that makes it difficult to interpret
                                using conventional analysis techniques. Dimensionality reduction methods are thus
                                required to extract useful and relevant information. Here we devise a machine learning
                                method, Gaussian mixture variational autoencoder (GMVAE) that can simultaneously perform
                                dimensionality reduction and clustering of biomolecular conformations in an unsupervised
                                way. We show that GMVAE can learn a reduced representation of the free energy landscape
                                of protein folding with highly separated clusters that correspond to the metastable
                                states during folding. Since GMVAE uses a mixture of Gaussians as the prior, it can
                                directly acknowledge the multi-basin nature of protein folding free-energy landscape. To
                                make the model end-to-end differentialble, we use a Gumbel-softmax distribution. We test
                                the model on three long-timescale protein folding trajectories and show that GMVAE
                                embedding resembles the folding funnel with folded states down the funnel and unfolded
                                states outer in the funnel path. Additionally, we show that the latent space of GMVAE
                                can be used for kinetic analysis and Markov state models built on this embedding produce
                                folding and unfolding timescales that are in close agreement with other rigorous
                                dynamical embeddings such as time independent component analysis (TICA).
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/1f9c63e957adb671e52a8a4368dbab25faefc428" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper" id="123">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Deep learning the slow modes
                                        for rare events sampling
          </strong>
         </h4>
         <h7 style="color:blue;">
          Proceedings of the National Academy of Sciences
         </h7>
         <p class="text-muted">
          <em>
           L. Bonati and G. Piccini and M. Parrinello
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Significance The use of enhanced sampling simulations is essential in the study of
                                complex physical, chemical, and biological processes. We devise a procedure that, by
                                combining machine learning and biased simulations, removes the bottlenecks that hinder
                                convergence. This approach allows different types of challenging processes to be studied
                                in a near-blind way, thus extending significantly the scope of atomistic simulations.
                                The development of enhanced sampling methods has greatly extended the scope of atomistic
                                simulations, allowing long-time phenomena to be studied with accessible computational
                                resources. Many such methods rely on the identification of an appropriate set of
                                collective variables. These are meant to describe the system’s modes that most slowly
                                approach equilibrium under the action of the sampling algorithm. Once identified, the
                                equilibration of these modes is accelerated by the enhanced sampling method of choice.
                                An attractive way of determining the collective variables is to relate them to the
                                eigenfunctions and eigenvalues of the transfer operator. Unfortunately, this requires
                                knowing the long-term dynamics of the system beforehand, which is generally not
                                available. However, we have recently shown that it is indeed possible to determine
                                efficient collective variables starting from biased simulations. In this paper, we bring
                                the power of machine learning and the efficiency of the recently developed on the fly
                                probability-enhanced sampling method to bear on this approach. The result is a powerful
                                and robust algorithm that, given an initial enhanced sampling simulation performed with
                                trial collective variables or generalized ensembles, extracts transfer operator
                                eigenfunctions using a neural network ansatz and then accelerates them to promote
                                sampling of rare events. To illustrate the generality of this approach, we apply it to
                                several systems, ranging from the conformational transition of a small molecule to the
                                folding of a miniprotein and the study of materials crystallization.
        </p>

       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/06b0a8c66ba5a4da7363116e7f4d65f1703d7e31" id="button"  data-id = "123" target="_blank"></a>
        <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
            {
                echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "3"></a>';
        
            }
        ?>
        
       </div>

      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper" id="update-div4">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Past–future information
                                        bottleneck for sampling molecular reaction coordinate simultaneously with
                                        thermodynamics and kinetics
          </strong>
         </h4>
         <h7 style="color:blue;">
          Nature Communications
         </h7>
         <p class="text-muted">
          <em>
           Yihang Wang and João Marcelo Lamim Ribeiro and P. Tiwary
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         S2 TL;DR: The authors adapt the Predictive Information Bottleneck framework to sample
                                biomolecular structure and dynamics through iterative rounds of biased simulations and
                                deep learning.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/10.1038@s41467-019-11405-4.pdf" id="button" target="_blank">

        </a>
        <a class="slide1 btn text-center"  href="javascript:void(0)" onclick="updater(this);" id="button" data-id = "4"></a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Data-Driven Collective
                                        Variables for Enhanced Sampling.
          </strong>
         </h4>
         <h7 style="color:blue;">
          The journal of physical chemistry letters
         </h7>
         <p class="text-muted">
          <em>
           L. Bonati and Valerio Rizzi and M. Parrinello
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Designing an appropriate set of collective variables is crucial to the success of
                                several enhanced sampling methods. Here we focus on how to obtain such variables from
                                information limited to the metastable states. We characterize these states by a large
                                set of descriptors and employ neural networks to compress this information in a
                                lower-dimensional space, using Fisher's linear discriminant as an objective function to
                                maximize the discriminative power of the network. We test this method on alanine
                                dipeptide, using the nonlinearly separable data set composed by atomic distances. We
                                then study an intermolecular aldol reaction characterized by a concerted mechanism. The
                                resulting variables are able to promote sampling by drawing nonlinear paths in the
                                physical space connecting the fluctuations between metastable basins. Lastly, we
                                interpret the behavior of the neural network by studying its relation to the physical
                                variables. Through the identification of its most relevant features, we are able to gain
                                chemical insight into the process.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/bonati2020.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Multiscale Reweighted
                                        Stochastic Embedding: Deep Learning of Collective Variables for Enhanced
                                        Sampling
          </strong>
         </h4>
         <h7 style="color:blue;">
          The Journal of Physical Chemistry. a
         </h7>
         <p class="text-muted">
          <em>
           J. Rydzewski and O. Valsson
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Machine learning methods provide a general framework for automatically finding and
                                representing the essential characteristics of simulation data. This task is particularly
                                crucial in enhanced sampling simulations. There we seek a few generalized degrees of
                                freedom, referred to as collective variables (CVs), to represent and drive the sampling
                                of the free energy landscape. In theory, these CVs should separate different metastable
                                states and correspond to the slow degrees of freedom of the studied physical process. To
                                this aim, we propose a new method that we call multiscale reweighted stochastic
                                embedding (MRSE). Our work builds upon a parametric version of stochastic neighbor
                                embedding. The technique automatically learns CVs that map a high-dimensional feature
                                space to a low-dimensional latent space via a deep neural network. We introduce several
                                new advancements to stochastic neighbor embedding methods that make MRSE especially
                                suitable for enhanced sampling simulations: (1) weight-tempered random sampling as a
                                landmark selection scheme to obtain training data sets that strike a balance between
                                equilibrium representation and capturing important metastable states lying higher in
                                free energy; (2) a multiscale representation of the high-dimensional feature space via a
                                Gaussian mixture probability model; and (3) a reweighting procedure to account for
                                training data from a biased probability distribution. We show that MRSE constructs
                                low-dimensional CVs that can correctly characterize the different metastable states in
                                three model systems: the Müller-Brown potential, alanine dipeptide, and alanine
                                tetrapeptide.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/rydzewski2021.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Machine Learning for Molecular
                                        Dynamics on Long Timescales
          </strong>
         </h4>
         <h7 style="color:blue;">
          ArXiv
         </h7>
         <p class="text-muted">
          <em>
           F. Noé
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         S2 TL;DR: The learning problems in long timescale MD are defined, successful approaches
                                are presented, and some of the unsolved ML problems in this application field are
                                outlined.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/55705bec7256bb2f3ceec805823de4e87bee87f1" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Collective variable discovery
                                        and enhanced sampling using autoencoders: Innovations in network architecture
                                        and error function design.
          </strong>
         </h4>
         <h7 style="color:blue;">
          The Journal of chemical physics
         </h7>
         <p class="text-muted">
          <em>
           Wei Chen and Aik Rui Tan and Andrew L. Ferguson
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Auto-associative neural networks ("autoencoders") present a powerful nonlinear
                                dimensionality reduction technique to mine data-driven collective variables from
                                molecular simulation trajectories. This technique furnishes explicit and differentiable
                                expressions for the nonlinear collective variables, making it ideally suited for
                                integration with enhanced sampling techniques for accelerated exploration of
                                configurational space. In this work, we describe a number of sophistications of the
                                neural network architectures to improve and generalize the process of interleaved
                                collective variable discovery and enhanced sampling. We employ circular network nodes to
                                accommodate periodicities in the collective variables, hierarchical network
                                architectures to rank-order the collective variables, and generalized encoder-decoder
                                architectures to support bespoke error functions for network training to incorporate
                                prior knowledge. We demonstrate our approach in blind collective variable discovery and
                                enhanced sampling of the configurational free energy landscapes of alanine dipeptide and
                                Trp-cage using an open-source plugin developed for the OpenMM molecular simulation
                                package.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/chen2018.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Learning Clustered
                                        Representation for Complex Free Energy Landscapes
          </strong>
         </h4>
         <h7 style="color:blue;">
          arXiv: Statistical Mechanics
         </h7>
         <p class="text-muted">
          <em>
           Jun Zhang and Yao-Kun Lei and X. Che and Zhen Zhang and Y. I.
                                        Yang and Y. Gao
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         In this paper we first analyzed the inductive bias underlying the data scattered across
                                complex free energy landscapes (FEL), and exploited it to train deep neural networks
                                which yield reduced and clustered representation for the FEL. Our parametric method,
                                called Information Distilling of Metastability (IDM), is end-to-end differentiable thus
                                scalable to ultra-large dataset. IDM is also a clustering algorithm and is able to
                                cluster the samples in the meantime of reducing the dimensions. Besides, as an
                                unsupervised learning method, IDM differs from many existing dimensionality reduction
                                and clustering methods in that it neither requires a cherry-picked distance metric nor
                                the ground-true number of clusters, and that it can be used to unroll and zoom-in the
                                hierarchical FEL with respect to different timescales. Through multiple experiments, we
                                show that IDM can achieve physically meaningful representations which partition the FEL
                                into well-defined metastable states hence are amenable for downstream tasks such as
                                mechanism analysis and kinetic modeling.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/a1b36c08f6f04550f1dc48d84bb74ad3a8e0aaa5" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Time-lagged autoencoders: Deep
                                        learning of slow collective variables for molecular kinetics
          </strong>
         </h4>
         <h7 style="color:blue;">
          The Journal of chemical physics
         </h7>
         <p class="text-muted">
          <em>
           C. Wehmeyer and F. Noé
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Inspired by the success of deep learning techniques in the physical and chemical
                                sciences, we apply a modification of an autoencoder type deep neural network to the task
                                of dimension reduction of molecular dynamics data. We can show that our time-lagged
                                autoencoder reliably finds low-dimensional embeddings for high-dimensional feature
                                spaces which capture the slow dynamics of the underlying stochastic processes-beyond the
                                capabilities of linear dimension reduction techniques.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/wehmeyer2018.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Capabilities and Limitations of
                                        Time-lagged Autoencoders for Slow Mode Discovery in Dynamical Systems
          </strong>
         </h4>
         <h7 style="color:blue;">
          ArXiv
         </h7>
         <p class="text-muted">
          <em>
           Wei Chen and Hythem Sidky and Andrew L. Ferguson
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Time-lagged autoencoders (TAEs) have been proposed as a deep learning regression-based
                                approach to the discovery of slow modes in dynamical systems. However, a rigorous
                                analysis of nonlinear TAEs remains lacking. In this work, we discuss the capabilities
                                and limitations of TAEs through both theoretical and numerical analyses. Theoretically,
                                we derive bounds for nonlinear TAE performance in slow mode discovery and show that in
                                general TAEs learn a mixture of slow and maximum variance modes. Numerically, we
                                illustrate cases where TAEs can and cannot correctly identify the leading slowest mode
                                in two example systems: a 2D "Washington beltway" potential and the alanine dipeptide
                                molecule in explicit water. We also compare the TAE results with those obtained using
                                state-free reversible VAMPnets (SRVs) as a variational-based neural network approach for
                                slow modes discovery, and show that SRVs can correctly discover slow modes where TAEs
                                fail.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/chen2019.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Nonlinear discovery of slow
                                        molecular modes using state-free reversible VAMPnets.
          </strong>
         </h4>
         <h7 style="color:blue;">
          The Journal of chemical physics
         </h7>
         <p class="text-muted">
          <em>
           Wei Chen and Hythem Sidky and Andrew L. Ferguson
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         The success of enhanced sampling molecular simulations that accelerate along collective
                                variables (CVs) is predicated on the availability of variables coincident with the slow
                                collective motions governing the long-time conformational dynamics of a system. It is
                                challenging to intuit these slow CVs for all but the simplest molecular systems, and
                                their data-driven discovery directly from molecular simulation trajectories has been a
                                central focus of the molecular simulation community to both unveil the important
                                physical mechanisms and drive enhanced sampling. In this work, we introduce state-free
                                reversible VAMPnets (SRV) as a deep learning architecture that learns nonlinear CV
                                approximants to the leading slow eigenfunctions of the spectral decomposition of the
                                transfer operator that evolves equilibrium-scaled probability distributions through
                                time. Orthogonality of the learned CVs is naturally imposed within network training
                                without added regularization. The CVs are inherently explicit and differentiable
                                functions of the input coordinates making them well-suited to use in enhanced sampling
                                calculations. We demonstrate the utility of SRVs in capturing parsimonious nonlinear
                                representations of complex system dynamics in applications to 1D and 2D toy systems
                                where the true eigenfunctions are exactly calculable and to molecular dynamics
                                simulations of alanine dipeptide and the WW domain protein.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/10.1063@1.5092521.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Perspective: Identification of
                                        collective variables and metastable states of protein dynamics.
          </strong>
         </h4>
         <h7 style="color:blue;">
          The Journal of chemical physics
         </h7>
         <p class="text-muted">
          <em>
           F. Sittel and G. Stock
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         The statistical analysis of molecular dynamics simulations requires dimensionality
                                reduction techniques, which yield a low-dimensional set of collective variables (CVs) {x
                                i } = x that in some sense describe the essential dynamics of the system. Considering
                                the distribution P( x ) of the CVs, the primal goal of a statistical analysis is to
                                detect the characteristic features of P( x ), in particular, its maxima and their
                                connection paths. This is because these features characterize the low-energy regions and
                                the energy barriers of the corresponding free energy landscape ΔG( x ) = -k B T ln P( x
                                ), and therefore amount to the metastable states and transition regions of the system.
                                In this perspective, we outline a systematic strategy to identify CVs and metastable
                                states, which subsequently can be employed to construct a Langevin or a Markov state
                                model of the dynamics. In particular, we account for the still limited sampling
                                typically achieved by molecular dynamics simulations, which in practice seriously limits
                                the applicability of theories (e.g., assuming ergodicity) and black-box software tools
                                (e.g., using redundant input coordinates). We show that it is essential to use internal
                                (rather than Cartesian) input coordinates, employ dimensionality reduction methods that
                                avoid rescaling errors (such as principal component analysis), and perform density based
                                (rather than k-means-type) clustering. Finally, we briefly discuss a machine learning
                                approach to dimensionality reduction, which highlights the essential internal
                                coordinates of a system and may reveal hidden reaction mechanisms.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/83d5c8f8f18a85473f7431155bbb6b0d.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Reweighted autoencoded
                                        variational Bayes for enhanced sampling (RAVE).
          </strong>
         </h4>
         <h7 style="color:blue;">
          The Journal of chemical physics
         </h7>
         <p class="text-muted">
          <em>
           João Marcelo Lamim Ribeiro and P. Bravo and Yihang Wang and
                                        P. Tiwary
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Here we propose the reweighted autoencoded variational Bayes for enhanced sampling
                                (RAVE) method, a new iterative scheme that uses the deep learning framework of
                                variational autoencoders to enhance sampling in molecular simulations. RAVE involves
                                iterations between molecular simulations and deep learning in order to produce an
                                increasingly accurate probability distribution along a low-dimensional latent space that
                                captures the key features of the molecular simulation trajectory. Using the
                                Kullback-Leibler divergence between this latent space distribution and the distribution
                                of various trial reaction coordinates sampled from the molecular simulation, RAVE
                                determines an optimum, yet nonetheless physically interpretable, reaction coordinate and
                                optimum probability distribution. Both then directly serve as the biasing protocol for a
                                new biased simulation, which is once again fed into the deep learning module with
                                appropriate weights accounting for the bias, the procedure continuing until estimates of
                                desirable thermodynamic observables are converged. Unlike recent methods using deep
                                learning for enhanced sampling purposes, RAVE stands out in that (a) it naturally
                                produces a physically interpretable reaction coordinate, (b) is independent of existing
                                enhanced sampling protocols to enhance the fluctuations along the latent space
                                identified via deep learning, and (c) it provides the ability to easily filter out
                                spurious solutions learned by the deep learning procedure. The usefulness and
                                reliability of RAVE is demonstrated by applying it to model potentials of increasing
                                complexity, including computation of the binding free energy profile for a hydrophobic
                                ligand-substrate system in explicit water with dissociation time of more than 3 min, in
                                computer time at least twenty times less than that needed for umbrella sampling or
                                metadynamics.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/ribeiro2018.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Deep learning for variational
                                        multiscale molecular modeling.
          </strong>
         </h4>
         <h7 style="color:blue;">
          The Journal of chemical physics
         </h7>
         <p class="text-muted">
          <em>
           Jun Zhang and Yao-Kun Lei and Y. I. Yang and Y. Gao
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Molecular simulations are widely applied in the study of chemical and bio-physical
                                problems. However, the accessible timescales of atomistic simulations are limited, and
                                extracting equilibrium properties of systems containing rare events remains challenging.
                                Two distinct strategies are usually adopted in this regard: either sticking to the
                                atomistic level and performing enhanced sampling or trading details for speed by
                                leveraging coarse-grained models. Although both strategies are promising, either of
                                them, if adopted individually, exhibits severe limitations. In this paper, we propose a
                                machine-learning approach to ally both strategies so that simulations on different
                                scales can benefit mutually from their crosstalks: Accurate coarse-grained (CG) models
                                can be inferred from the fine-grained (FG) simulations through deep generative learning;
                                in turn, FG simulations can be boosted by the guidance of CG models via deep
                                reinforcement learning. Our method defines a variational and adaptive training
                                objective, which allows end-to-end training of parametric molecular models using deep
                                neural networks. Through multiple experiments, we show that our method is efficient and
                                flexible and performs well on challenging chemical and bio-molecular systems.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/d5afe6f56fb0b48a2e890444b23daca676f0f8b4" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           EncoderMap(II): Visualizing
                                        Important Molecular Motions with Improved Generation of Protein
                                        Conformations
          </strong>
         </h4>
         <h7 style="color:blue;">
          Journal of chemical information and modeling
         </h7>
         <p class="text-muted">
          <em>
           Tobias Lemke and Andrej Berg and Alok Jain and C. Peter
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Dimensionality reduction can be used to project high-dimensional molecular data into a
                                simplified, low-dimensional map. One feature of our recently introduced dimensionality
                                reduction technique EncoderMap, which relies on the combination of an autoencoder with
                                multidimensional scaling, is its ability to do the reverse. It is able to generate
                                conformations for any selected points in the low-dimensional map. This transfers the
                                simplified, low-dimensional map back into the high-dimensional conformational space.
                                Although the output is again high-dimensional, certain aspects of the simplification are
                                preserved. The generated conformations only mirror the most dominant conformational
                                differences that determine the positions of conformational states in the low-dimensional
                                map. This allows to depict such differences and - in consequence - visualize molecular
                                motions and gives a unique perspective on high-dimensional conformational data. In our
                                previous work protein conformations described in backbone dihedral angle space were used
                                as input for EncoderMap, and conformations were also generated in this space. For large
                                proteins, however, the generation of conformations is inaccurate with this approach due
                                to the local character of backbone dihedral angles. Here, we present an improved variant
                                of EncoderMap which is able to generate large protein conformations that are accurate in
                                short-range and long-range order. This is achieved by differentiable reconstruction of
                                Cartesian coordinates from the generated dihedrals, which allows to add a contribution
                                to the cost function that monitors the accuracy of all pairwise distances between the C
                                α -atoms of the generated conformations. The improved capabilities to generate
                                conformations of large, even multidomain, proteins are demonstrated for two examples:
                                diubiquitin and a part of the Ssa1 Hsp70 yeast chaperone. We show that the improved
                                variant of EncoderMap can nicely visualize motions of protein domains relative to each
                                other but is also able to highlight important conformational changes within the
                                individual domains.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/lemke2019.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Systematic control of
                                        collective variables learned from variational autoencoders.
          </strong>
         </h4>
         <h7 style="color:blue;">
          The Journal of chemical physics
         </h7>
         <p class="text-muted">
          <em>
           Jacob I. Monroe and V. K. Shen
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Variational autoencoders (VAEs) are rapidly gaining popularity within molecular
                                simulation for discovering low-dimensional, or latent, representations, which are
                                critical for both analyzing and accelerating simulations. However, it remains unclear
                                how the information a VAE learns is connected to its probabilistic structure and, in
                                turn, its loss function. Previous studies have focused on feature engineering, ad hoc
                                modifications to loss functions, or adjustment of the prior to enforce desirable latent
                                space properties. By applying effectively arbitrarily flexible priors via normalizing
                                flows, we focus instead on how adjusting the structure of the decoding model impacts the
                                learned latent coordinate. We systematically adjust the power and flexibility of the
                                decoding distribution, observing that this has a significant impact on the structure of
                                the latent space as measured by a suite of metrics developed in this work. By also
                                varying weights on separate terms within each VAE loss function, we show that the level
                                of detail encoded can be further tuned. This provides practical guidance for utilizing
                                VAEs to extract varying resolutions of low-dimensional information from molecular
                                dynamics and Monte Carlo simulations.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/3999faeea4b6fc58615245072ce010a0e6f641ea" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Dynamical coring of Markov
                                        state models.
          </strong>
         </h4>
         <h7 style="color:blue;">
          The Journal of chemical physics
         </h7>
         <p class="text-muted">
          <em>
           Daniel Nagel and Anna Weber and Benjamin Lickert and G.
                                        Stock
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         The accurate definition of suitable metastable conformational states is fundamental for
                                the construction of a Markov state model describing biomolecular dynamics. Following the
                                dimensionality reduction in a molecular dynamics trajectory, these microstates can be
                                generated by a recently proposed density-based geometrical clustering algorithm [F.
                                Sittel and G. Stock, J. Chem. Theory Comput. 12, 2426 (2016)], which by design cuts the
                                resulting clusters at the energy barriers and allows for a data-based identification of
                                all parameters. Nevertheless, projection artifacts due to the inevitable restriction to
                                a low-dimensional space combined with insufficient sampling often leads to a
                                misclassification of sampled points in the transition regions. This typically causes
                                intrastate fluctuations to be mistaken as interstate transitions, which leads to
                                artificially short life times of the metastable states. As a simple but effective
                                remedy, dynamical coring requires that the trajectory spends a minimum time in the new
                                state for the transition to be counted. Adopting molecular dynamics simulations of two
                                well-established biomolecular systems (alanine dipeptide and villin headpiece),
                                dynamical coring is shown to considerably improve the Markovianity of the resulting
                                metastable states, which is demonstrated by Chapman-Kolmogorov tests and increased
                                implied time scales of the Markov model. Providing high structural and temporal
                                resolution, the combination of density-based clustering and dynamical coring is
                                particularly suited to describe the complex structural dynamics of unfolded
                                biomolecules.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/10.1063@1.5081767.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           EncoderMap: Dimensionality
                                        Reduction and Generation of Molecule Conformations.
          </strong>
         </h4>
         <h7 style="color:blue;">
          Journal of chemical theory and computation
         </h7>
         <p class="text-muted">
          <em>
           Tobias Lemke and C. Peter
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Molecular simulation is one example where large amounts of high-dimensional (high-d)
                                data are generated. To extract useful information, e.g., about relevant states and
                                important conformational transitions, a form of dimensionality reduction is required.
                                Dimensionality reduction algorithms differ in their ability to efficiently project large
                                amounts of data to an informative low-dimensional (low-d) representation and the way the
                                low and high-d representations are linked. We propose a dimensionality reduction
                                algorithm called EncoderMap that is based on a neural network autoencoder in combination
                                with a nonlinear distance metric. A key advantage of this method is that it establishes
                                a functional link from the high-d to the low-d representation and vice versa. This
                                allows us not only to efficiently project data points to the low-d representation but
                                also to generate high-d representatives for any point in the low-d map. The potential of
                                the algorithm is demonstrated for molecular simulation data of a small, highly flexible
                                peptide as well as for folding simulations of the 20-residue Trp-cage protein. We
                                demonstrate that the algorithm is able to efficiently project the ensemble of high-d
                                structures to a low-d map where major states can be identified and important
                                conformational transitions are revealed. We also show that molecular conformations can
                                be generated for any point or any connecting line between points on the low-d map. This
                                ability of inverse mapping from the low-d to the high-d representation is particularly
                                relevant for the use in algorithms that enhance the exploration of conformational space
                                or the sampling of transitions between conformational states.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/lemke2019.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           The role of conformational
                                        entropy in the determination of structural-kinetic relationships for helix-coil
                                        transitions
          </strong>
         </h4>
         <h7 style="color:blue;">
          bioRxiv
         </h7>
         <p class="text-muted">
          <em>
           J. F. Rudzinski and T. Bereau
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Coarse-grained molecular simulation models can provide significant insight into the
                                complex behavior of protein systems, but suffer from an inherently distorted description
                                of dynamical properties. This limitation prevents these models from providing consistent
                                structural interpretations for kinetic experiments. We recently demonstrated (Rudzinski,
                                Bereau, bioRχiv, 2017, https://doi.org/10.1101/183053) that, for a heptapeptide of
                                alanine residues, the structural and kinetic properties of a simulation model are linked
                                in a rather simple way, given a certain level of physics present in the model. In this
                                work, we extend these findings to a longer peptide, for which the representation of
                                configuration space in terms of a full enumeration of sequences of helical/coil states
                                along the peptide backbone is impractical. Similar to our previous work, we verify the
                                structural-kinetic relationships by scanning the parameter space of a simple
                                native-biased model and then employ a distinct transferable model to validate and
                                generalize the conclusions. Our results further demonstrate the validity of the previous
                                findings, while clarifying the role of conformational entropy in the determination of
                                the structural-kinetic relationships. More specifically, while the kinetic properties of
                                a particular class of models with varying energetic parameters but approximately fixed
                                conformational entropy are determined by the average helical content, a shift in the
                                kinetic observables occurs for models with a distinct representation of steric
                                interactions. The conclusions suggest an approach for ensuring kinetic consistency of
                                coarse-grained simulation models.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/22ed924c0d91c12e28d36322ecc26bbf2394fb03" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Deep Representation Learning
                                        for Complex Free Energy Landscapes.
          </strong>
         </h4>
         <h7 style="color:blue;">
          The journal of physical chemistry letters
         </h7>
         <p class="text-muted">
          <em>
           Jun Zhang and Yao-Kun Lei and X. Che and Zhen Zhang and Y. I.
                                        Yang and Y. Gao
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         In this letter, we analyzed the inductive bias underlying complex free energy landscapes
                                (FEL), and exploited it to train deep neural networks which yield reduced and clustered
                                representation for the FEL. Our parametric method, called Information Distilling of
                                Metastability (IDM), is end-to-end differentiable thus scalable to ultra-large dataset.
                                IDM is able to perform clustering in the meantime of reducing the dimensions. Besides,
                                as an unsupervised learning method, IDM differs from many existing dimensionality
                                reduction and clustering methods in that it neither requires a cherry-picked distance
                                metric nor the ground-true number of clusters defined a priori, and that it can be used
                                to unroll and zoom-in the hierarchical FEL with respect to different timescales. Through
                                multiple experiments, we show that IDM can achieve physically meaningful representations
                                which partition the FEL into well-defined metastable states hence are amenable for
                                downstream tasks such as mechanism analysis and kinetic modeling.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/zhang2019.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Toward Achieving Efficient and
                                        Accurate Ligand-Protein Unbinding with Deep Learning and Molecular Dynamics
                                        through RAVE.
          </strong>
         </h4>
         <h7 style="color:blue;">
          Journal of chemical theory and computation
         </h7>
         <p class="text-muted">
          <em>
           João Marcelo Lamim Ribeiro and P. Tiwary
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         In this work, we demonstrate how to leverage our recent iterative deep learning-all atom
                                molecular dynamics (MD) technique "Reweighted autoencoded variational Bayes for enhanced
                                sampling (RAVE)" (Ribeiro, Bravo, Wang, Tiwary, J. Chem. Phys. 2018, 149, 072301) for
                                investigating ligand-protein unbinding mechanisms and calculating absolute binding free
                                energies, Δ Gb, when plagued with difficult to sample rare events. In order to do so, we
                                introduce a simple but powerful extension to RAVE that allows learning a reaction
                                coordinate expressed as a piecewise function that is linear over all intervals. Such an
                                approach allows us to retain the physical interpretation of a RAVE-derived reaction
                                coordinate while making the method more applicable to a wider range of complex
                                biophysical problems. As we will demonstrate, using as our test-case the slow
                                dissociation of benzene from the L99A variant of lysozyme, the RAVE extension led to
                                observing an unbinding event in 100% of the independent all-atom MD simulations, all
                                within 3-50 ns for a process that takes on an average close to few hundred milliseconds,
                                which reflects a 7 orders of magnitude acceleration relative to straightforward MD.
                                Furthermore, we will show that without the use of time-dependent biasing, clear
                                back-and-forth movement between metastable intermediates was achieved during the various
                                simulations, demonstrating the caliber of the RAVE-derived piecewise reaction coordinate
                                and bias potential, which together drive efficient and accurate sampling of the
                                ligand-protein dissociation event. Last, we report the results for Δ Gb, which via very
                                short MD simulations, can form a strict lower-bound that is ∼2-3 kcal/mol off from
                                experiments. We believe that RAVE, together with its multidimensional extension that we
                                introduce here, will be a useful tool for simulating the slow unbinding process of
                                practical ligand-protein complexes in an automated manner with minimal use of human
                                intuition.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/a57588bf8930bc16f63e237bce41d372.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Extensible and Scalable
                                        Adaptive Sampling on Supercomputers.
          </strong>
         </h4>
         <h7 style="color:blue;">
          Journal of chemical theory and computation
         </h7>
         <p class="text-muted">
          <em>
           Eugen Hruska and Vivek Balasubramanian and Hyungro Lee and S.
                                        Jha and C. Clementi
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         The accurate sampling of protein dynamics is an ongoing challenge despite the
                                utilization of high-performance computer (HPC) systems. Utilizing only "brute force"
                                molecular dynamics (MD) simulations requires an unacceptably long time to solution.
                                Adaptive sampling methods allow a more effective sampling of protein dynamics than
                                standard MD simulations. Depending on the restarting strategy, the speed up can be more
                                than 1 order of magnitude. One challenge limiting the utilization of adaptive sampling
                                by domain experts is the relatively high complexity of efficiently running adaptive
                                sampling on HPC systems. We discuss how the ExTASY framework can set up new adaptive
                                sampling strategies and reliably execute resulting workflows at scale on HPC platforms.
                                Here, the folding dynamics of four proteins are predicted with no a priori information.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/hruska2020.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Automatic mutual information
                                        noise omission (AMINO): generating order parameters for molecular
                                        systems
          </strong>
         </h4>
         <h7 style="color:blue;">
          bioRxiv
         </h7>
         <p class="text-muted">
          <em>
           P. Ravindra and Zachary Smith and P. Tiwary
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Molecular dynamics (MD) simulations generate valuable all-atom resolution trajectories
                                of complex systems, but analyzing this high-dimensional data as well as reaching
                                practical timescales even with powerful super-computers remain open problems. As such,
                                many specialized sampling and reaction coordinate construction methods exist that
                                alleviate these problems. However, these methods typically don’t work directly on all
                                atomic coordinates, and still require previous knowledge of the important distinguishing
                                features of the system, known as order parameters (OPs). Here we present AMINO, an
                                automated method that generates such OPs by screening through a very large dictionary of
                                OPs, such as all heavy atom contacts in a biomolecule. AMINO uses ideas from information
                                theory and rate distortion theory. The OPs learnt from AMINO can then serve as an input
                                for designing a reaction coordinate which can then be used in many enhanced sampling
                                methods. Here we outline its key theoretical underpinnings, and apply it to systems of
                                increasing complexity. Our applications include a problem of tremendous pharmaceutical
                                and engineering relevance, namely, calculating the binding affinity of a protein-ligand
                                system when all that is known is the structure of the bound system. Our calculations are
                                performed in a human-free fashion, obtaining very accurate results compared to long
                                unbiased MD simulations on the Anton supercomputer, but in orders of magnitude less
                                computer time. We thus expect AMINO to be useful for the calculation of thermodynamics
                                and kinetics in the study of diverse molecular systems.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/55c81b9b31c93af629c853df42fe83cf036d0ff4" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           High-Resolution Markov State
                                        Models for the Dynamics of Trp-Cage Miniprotein Constructed over Slow Folding
                                        Modes Identified by State-Free Reversible VAMPnets.
          </strong>
         </h4>
         <h7 style="color:blue;">
          The journal of physical chemistry. B
         </h7>
         <p class="text-muted">
          <em>
           Hythem Sidky and Wei Chen and Andrew L. Ferguson
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         State-free reversible VAMPnets (SRVs) are a neural network-based framework capable of
                                learning the leading eigenfunctions of the transfer operator of a dynamical system from
                                trajectory data. In molecular dynamics simulations, these data-driven collective
                                variables (CVs) capture the slowest modes of the dynamics and are useful for enhanced
                                sampling and free energy estimation. In this work, we employ SRV coordinates as a
                                feature set for Markov state model (MSM) construction. Compared to the current state of
                                the art, MSMs constructed from SRV coordinates are more robust to the choice of input
                                features, exhibit faster implied timescale convergence, and permit the use of shorter
                                lagtimes to construct higher kinetic resolution models. We apply this methodology to
                                study the folding kinetics and conformational landscape of the Trp-cage miniprotein.
                                Folding and unfolding mean first passage times are in good agreement with prior
                                literature, and a nine macrostate model is presented. The unfolded ensemble comprises a
                                central kinetic hub with interconversions to several metastable unfolded conformations
                                and which serves as the gateway to the folded ensemble. The folded ensemble comprises
                                the native state, a partially unfolded intermediate "loop" state, and a previously
                                unreported short-lived intermediate that we were able to resolve due to the high
                                time-resolution of the SRV-MSM. We propose SRVs as an excellent candidate for
                                integration into modern MSM construction pipelines.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/sidky2019.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Investigating the
                                        Conformational Ensembles of Intrinsically Disordered Proteins with a Simple
                                        Physics-Based Model
          </strong>
         </h4>
         <h7 style="color:blue;">
          The Journal of Physical Chemistry. B
         </h7>
         <p class="text-muted">
          <em>
           Yani Zhao and R. Cortes-Huerto and K. Kremer and J. F.
                                        Rudzinski
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Intrinsically disordered proteins (IDPs) play an important role in an array of
                                biological processes but present a number of fundamental challenges for computational
                                modeling. Recently, simple polymer models have re-gained popularity for interpreting the
                                experimental characterization of IDPs. Homopolymer theory provides a strong foundation
                                for understanding generic features of phenomena ranging from single-chain conformational
                                dynamics to the properties of entangled polymer melts, but is difficult to extend to the
                                copolymer context. This challenge is magnified for proteins due to the variety of
                                competing interactions and large deviations in side-chain properties. In this work, we
                                apply a simple physics-based coarse-grained model for describing largely disordered
                                conformational ensembles of peptides, based on the premise that sampling
                                sterically-forbidden conformations can compromise the faithful description of both
                                static and dynamical properties. The Hamiltonian of the employed model can be easily
                                adjusted to investigate the impact of distinct interactions and sequence specificity on
                                the randomness of the resulting conformational ensemble. In particular, starting with a
                                bead-spring-like model and then adding more detailed interactions one by one, we
                                construct a hierarchical set of models and perform a detailed comparison of their
                                properties. Our analysis clarifies the role of generic attractions, electrostatics and
                                side-chain sterics, while providing a foundation for developing efficient models for
                                IDPs that retain an accurate description of the hierarchy of conformational dynamics,
                                which is nontrivially influenced by interactions with surrounding proteins and solvent
                                molecules.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/33342505de83960be734548d911c0ae9543a467f" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Structural-kinetic-thermodynamic relationships identified from physics-based
                                        molecular simulation models.
          </strong>
         </h4>
         <h7 style="color:blue;">
          The Journal of chemical physics
         </h7>
         <p class="text-muted">
          <em>
           J. F. Rudzinski and T. Bereau
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Coarse-grained molecular simulation models have provided immense, often general, insight
                                into the complex behavior of condensed-phase systems but suffer from a lost connection
                                to the true dynamical properties of the underlying system. In general, the physics that
                                is built into a model shapes the free-energy landscape, restricting the attainable
                                static and kinetic properties. In this work, we perform a detailed investigation into
                                the property interrelationships resulting from these restrictions, for a representative
                                system of the helix-coil transition. Inspired by high-throughput studies, we
                                systematically vary force-field parameters and monitor their structural, kinetic, and
                                thermodynamic properties. The focus of our investigation is a simple coarse-grained
                                model, which accurately represents the underlying structural ensemble, i.e., effectively
                                avoids sterically-forbidden configurations. As a result of this built-in physics, we
                                observe a rather large restriction in the topology of the networks characterizing the
                                simulation kinetics. When screening across force-field parameters, we find that
                                structurally accurate models also best reproduce the kinetics, suggesting
                                structural-kinetic relationships for these models. Additionally, an investigation into
                                thermodynamic properties reveals a link between the cooperativity of the transition and
                                the network topology at a single reference temperature.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/rudzinski2018.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Past–future information
                                        bottleneck framework for simultaneously sampling biomolecular reaction
                                        coordinate, thermodynamics and kinetics
          </strong>
         </h4>
         <h7 style="color:blue;">
          bioRxiv
         </h7>
         <p class="text-muted">
          <em>
           Yihang Wang and João Marcelo Lamim Ribeiro and P. Tiwary
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         The ability to rapidly learn from high-dimensional data to make reliable bets about the
                                future outcomes is crucial in many contexts. This could be a fly avoiding predators, or
                                the retina processing gigabytes of data almost instantaneously to guide complex human
                                actions. In this work we draw parallels between such tasks, and the efficient sampling
                                of complex biomolecules with hundreds of thousands of atoms. For this we use the
                                Predictive Information Bottleneck (PIB) framework developed and used for the first two
                                classes of problems, and re-formulate it for the sampling of biomolecular structure and
                                dynamics, especially when plagued with rare events. Our method considers a given
                                biomolecular trajectory expressed in terms of order parameters or basis functions, and
                                uses a deep neural network to learn the minimally complex yet most predictive aspects of
                                this trajectory, viz the PIB. This information is used to perform iterative rounds of
                                biased simulations that enhance the sampling along the PIB to gradually improve its
                                accuracy, directly obtaining associated thermodynamic and kinetic information. We
                                demonstrate the method on two test-pieces, including benzene dissociation from the
                                protein lysozyme, where we calculate the dissociation pathway and timescales slower than
                                milliseconds. Finally, by performing an analysis of residues contributing to the PIB, we
                                predict the critical mutations in the system which would be most impactful on the
                                stability of the crucial but ephemeral transition state. We believe this work marks a
                                big step forward in the use of predictive artificial intelligence ideas for the sampling
                                of biomolecules.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/4275490b2442d0f4bfd56ec5f494e8c81543c0bb" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           A deep autoencoder framework
                                        for discovery of metastable ensembles in biomacromolecules.
          </strong>
         </h4>
         <h7 style="color:blue;">
          The Journal of chemical physics
         </h7>
         <p class="text-muted">
          <em>
           Satyabrata Bandyopadhyay and J. Mondal
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Biomacromolecules manifest dynamic conformational fluctuation and involve mutual
                                interconversion among metastable states. A robust mapping of their conformational
                                landscape often requires the low-dimensional projection of the conformational ensemble
                                along optimized collective variables (CVs). However, the traditional choice for the CV
                                is often limited by user-intuition and prior knowledge about the system, and this lacks
                                a rigorous assessment of their optimality over other candidate CVs. To address this
                                issue, we propose an approach in which we first choose the possible combinations of
                                inter-residue Cα-distances within a given macromolecule as a set of input CVs.
                                Subsequently, we derive a non-linear combination of latent space embedded CVs via
                                auto-encoding the unbiased molecular dynamics simulation trajectories within the
                                framework of the feed-forward neural network. We demonstrate the ability of the derived
                                latent space variables in elucidating the conformational landscape in four
                                hierarchically complex systems. The latent space CVs identify key metastable states of a
                                bead-in-a-spring polymer. The combination of the adopted dimensional reduction technique
                                with a Markov state model, built on the derived latent space, reveals multiple spatially
                                and kinetically well-resolved metastable conformations for GB1 β-hairpin. A quantitative
                                comparison based on the variational approach-based scoring of the auto-encoder-derived
                                latent space CVs with the ones obtained via independent component analysis (principal
                                component analysis or time-structured independent component analysis) confirms the
                                optimality of the former. As a practical application, the auto-encoder-derived CVs were
                                found to predict the reinforced folding of a Trp-cage mini-protein in aqueous osmolyte
                                solution. Finally, the protocol was able to decipher the conformational heterogeneities
                                involved in a complex metalloenzyme, namely, cytochrome P450.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/6bb5eeb7728656d61987b98aceb9cc4579a6f705" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Learning Efficient, Collective
                                        Monte Carlo Moves with Variational Autoencoders.
          </strong>
         </h4>
         <h7 style="color:blue;">
          Journal of chemical theory and computation
         </h7>
         <p class="text-muted">
          <em>
           Jacob I. Monroe and V. K. Shen
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Discovering meaningful collective variables for enhancing sampling, via applied biasing
                                potentials or tailored MC move sets, remains a major challenge within molecular
                                simulation. While recent studies identifying collective variables with variational
                                autoencoders (VAEs) have focused on the encoding and latent space discovered by a VAE,
                                the impact of the decoding and its ability to act as a generative model remains
                                unexplored. We demonstrate how VAEs may be used to learn (on-the-fly and with minimal
                                human intervention) highly efficient, collective Monte Carlo moves that accelerate
                                sampling along the learned collective variable. In contrast to many machine
                                learning-based efforts to bias sampling and generate novel configurations, our methods
                                result in exact sampling in the ensemble of interest and do not require reweighting. In
                                fact, we show that the acceptance rates of our moves approach unity for a perfect VAE
                                model. While this is never observed in practice, VAE-based Monte Carlo moves still
                                enhance sampling of new configurations. We demonstrate, however, that the form of the
                                encoding and decoding distributions, in particular the extent to which the decoder
                                reflects the underlying physics, greatly impacts the performance of the trained VAE.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/bd8c74f9c67ec07605eac970928782d5cb47b8b3" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Structural-Kinetic-Thermodynamic Relationships for Peptide Secondary
                                        Structure Formation Identified from Transition Network Properties
          </strong>
         </h4>
         <h7 style="color:blue;">
          bioRxiv
         </h7>
         <p class="text-muted">
          <em>
           J. F. Rudzinski and T. Bereau
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Molecular simulation models have provided immense, often general, insight into the
                                complex behavior of protein systems. Even for very detailed, e.g., atomistic, models,
                                the generation of quantitatively accurate dynamical properties remains a formidable
                                challenge. This lack of consistent dynamics largely hinders simulation models,
                                especially coarse-grained models, from providing structural interpretations for kinetic
                                experiments. In this work, we perform a detailed investigation into the kinetic
                                properties generated by molecular simulation models for a representative system of the
                                helix-coil transition. Inspired by high-throughput studies that aim to uncover
                                structure-property relationships, we systematically vary force-field parameters and
                                monitor their structural, kinetic, and thermodynamic properties. The focus of our
                                investigation is a simple, nativebiased coarse-grained model, which accurately
                                represents the underlying structural ensemble by employing near-atomistic steric and
                                intramolecular backbone interactions. From each set of simulations, we construct a
                                Markov state model to efficiently and systematically assess the system’s kinetic
                                properties. We observe a rather large restriction in the topology of the resulting
                                kinetic networks, apparently due to the detailed description of the peptide backbone.
                                When screening across force-field parameters, we find that structurally-accurate models,
                                with respect to a higher-resolution reference, also best reproduce the kinetics. This
                                connection suggests structural-kinetic relationships for these models—accurate
                                structural features guarantee consistent kinetics. A comparative study against distinct
                                higher-resolution models highlights the generality of our conclusions. These remarkable
                                relationships hinge upon the physics of the model, which shapes the free-energy
                                landscape and restricts the attainable kinetic properties. While structural features
                                determine the kinetics at a single temperature, the temperature dependence of the
                                structure determines the thermodynamics, i.e., cooperativity, of the transition.
                                Interestingly, a topological metric of the kinetic networks characterizing the degree of
                                randomness of pathways traveling between the helix and coil states at a single reference
                                temperature dictates the relative cooperativity of the resulting transition.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/5accc7bc13a4eab720f72eb99e2fb2a47e5a22eb" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Molecular enhanced sampling
                                        with autoencoders: On‐the‐fly collective variable discovery and accelerated free
                                        energy landscape exploration
          </strong>
         </h4>
         <h7 style="color:blue;">
          Journal of Computational Chemistry
         </h7>
         <p class="text-muted">
          <em>
           Wei Chen and Andrew L. Ferguson
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Macromolecular and biomolecular folding landscapes typically contain high free energy
                                barriers that impede efficient sampling of configurational space by standard molecular
                                dynamics simulation. Biased sampling can artificially drive the simulation along
                                prespecified collective variables (CVs), but success depends critically on the
                                availability of good CVs associated with the important collective dynamical motions.
                                Nonlinear machine learning techniques can identify such CVs but typically do not furnish
                                an explicit relationship with the atomic coordinates necessary to perform biased
                                sampling. In this work, we employ auto‐associative artificial neural networks
                                (“autoencoders”) to learn nonlinear CVs that are explicit and differentiable functions
                                of the atomic coordinates. Our approach offers substantial speedups in exploration of
                                configurational space, and is distinguished from existing approaches by its capacity to
                                simultaneously discover and directly accelerate along data‐driven CVs. We demonstrate
                                the approach in simulations of alanine dipeptide and Trp‐cage, and have developed an
                                open‐source and freely available implementation within OpenMM. © 2018 Wiley Periodicals,
                                Inc.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/1ff179c3ad5c52fca11f792c3a09a134.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Variational encoding of complex
                                        dynamics.
          </strong>
         </h4>
         <h7 style="color:blue;">
          Physical review. E
         </h7>
         <p class="text-muted">
          <em>
           Carlos X. Hernández and H. Wayment-Steele and Mohammad M.
                                        Sultan and B. Husic and V. Pande
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Often the analysis of time-dependent chemical and biophysical systems produces
                                high-dimensional time-series data for which it can be difficult to interpret which
                                individual features are most salient. While recent work from our group and others has
                                demonstrated the utility of time-lagged covariate models to study such systems,
                                linearity assumptions can limit the compression of inherently nonlinear dynamics into
                                just a few characteristic components. Recent work in the field of deep learning has led
                                to the development of the variational autoencoder (VAE), which is able to compress
                                complex datasets into simpler manifolds. We present the use of a time-lagged VAE, or
                                variational dynamics encoder (VDE), to reduce complex, nonlinear processes to a single
                                embedding with high fidelity to the underlying dynamics. We demonstrate how the VDE is
                                able to capture nontrivial dynamics in a variety of examples, including Brownian
                                dynamics and atomistic protein folding. Additionally, we demonstrate a method for
                                analyzing the VDE model, inspired by saliency mapping, to determine what features are
                                selected by the VDE model to describe dynamics. The VDE presents an important step in
                                applying techniques from deep learning to more accurately model and interpret complex
                                biophysics.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/10.1103@PhysRevE.97.062412.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Chasing Collective Variables
                                        using Autoencoders and biased trajectories
          </strong>
         </h4>
         <h7 style="color:blue;">
          Journal of chemical theory and computation
         </h7>
         <p class="text-muted">
          <em>
           Zineb Belkacemi and P. Gkeka and T. Lelièvre and G.
                                        Stoltz
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Free energy biasing methods have proven to be powerful tools to accelerate the
                                simulation of important conformational changes of molecules by modifying the sampling
                                measure. However, most of these methods rely on the prior knowledge of low-dimensional
                                slow degrees of freedom, i.e., collective variables (CVs). Alternatively, such CVs can
                                be identified using machine learning (ML) and dimensionality reduction algorithms. In
                                this context, approaches where the CVs are learned in an iterative way using adaptive
                                biasing have been proposed: at each iteration, the learned CV is used to perform free
                                energy adaptive biasing to generate new data and learn a new CV. In this paper, we
                                introduce a new iterative method involving CV learning with autoencoders: Free Energy
                                Biasing and Iterative Learning with AutoEncoders (FEBILAE). Our method includes a
                                reweighting scheme to ensure that the learning model optimizes the same loss at each
                                iteration and achieves CV convergence. Using the alanine dipeptide system and the
                                solvated chignolin mini-protein system as examples, we present results of our algorithm
                                using the extended adaptive biasing force as the free energy adaptive biasing method.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/a43d083d9414c106f23b5ed0c40177a086b42799" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Machine learning approaches for
                                        analyzing and enhancing molecular dynamics simulations.
          </strong>
         </h4>
         <h7 style="color:blue;">
          Current opinion in structural biology
         </h7>
         <p class="text-muted">
          <em>
           Yihang Wang and João Marcelo Lamim Ribeiro and P. Tiwary
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         S2 TL;DR: A summary of machine learning based ideas that are solving both of these
                                limitations of molecular dynamics, with a focus on their key theoretical underpinnings
                                and remaining challenges.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/10.1016@j.sbi.2019.12.016.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Interpretable embeddings from
                                        molecular simulations using Gaussian mixture variational autoencoders
          </strong>
         </h4>
         <h7 style="color:blue;">
          Machine Learning: Science and Technology
         </h7>
         <p class="text-muted">
          <em>
           Yasemin Bozkurt Varolgunes and T. Bereau and J. F.
                                        Rudzinski
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Extracting insight from the enormous quantity of data generated from molecular
                                simulations requires the identification of a small number of collective variables whose
                                corresponding low-dimensional free-energy landscape retains the essential features of
                                the underlying system. Data-driven techniques provide a systematic route to constructing
                                this landscape, without the need for extensive a priori intuition into the relevant
                                driving forces. In particular, autoencoders are powerful tools for dimensionality
                                reduction, as they naturally force an information bottleneck and, thereby, a
                                low-dimensional embedding of the essential features. While variational autoencoders
                                ensure continuity of the embedding by assuming a unimodal Gaussian prior, this is at
                                odds with the multi-basin free-energy landscapes that typically arise from the
                                identification of meaningful collective variables. In this work, we incorporate this
                                physical intuition into the prior by employing a Gaussian mixture variational
                                autoencoder (GMVAE), which encourages the separation of metastable states within the
                                embedding. The GMVAE performs dimensionality reduction and clustering within a single
                                unified framework, and is capable of identifying the inherent dimensionality of the
                                input data, in terms of the number of Gaussians required to categorize the data. We
                                illustrate our approach on two toy models, alanine dipeptide, and a challenging
                                disordered peptide ensemble, demonstrating the enhanced clustering effect of the GMVAE
                                prior compared to standard VAEs. The resulting embeddings appear to be promising
                                representations for constructing Markov state models, highlighting the transferability
                                of the dimensionality reduction from static equilibrium properties to dynamics.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/bozkurtvarolgunes2020.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Neural networks-based
                                        variationally enhanced sampling
          </strong>
         </h4>
         <h7 style="color:blue;">
          Proceedings of the National Academy of Sciences
         </h7>
         <p class="text-muted">
          <em>
           L. Bonati and Yue-Yu Zhang and M. Parrinello
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Significance Atomistic-based simulations are one of the most widely used tools in
                                contemporary science. However, in the presence of kinetic bottlenecks, their power is
                                severely curtailed. In order to mitigate this problem, many enhanced sampling techniques
                                have been proposed. Here, we show that by combining a variational approach with deep
                                learning, much progress can be made in extending the scope of such simulations. Our
                                development bridges the fields of enhanced sampling and machine learning and allows us
                                to benefit from the rapidly growing advances in this area. Sampling complex free-energy
                                surfaces is one of the main challenges of modern atomistic simulation methods. The
                                presence of kinetic bottlenecks in such surfaces often renders a direct approach
                                useless. A popular strategy is to identify a small number of key collective variables
                                and to introduce a bias potential that is able to favor their fluctuations in order to
                                accelerate sampling. Here, we propose to use machine-learning techniques in conjunction
                                with the recent variationally enhanced sampling method [O. Valsson, M. Parrinello, Phys.
                                Rev. Lett. 113, 090601 (2014)] in order to determine such potential. This is achieved by
                                expressing the bias as a neural network. The parameters are determined in a variational
                                learning scheme aimed at minimizing an appropriate functional. This required the
                                development of a more efficient minimization technique. The expressivity of neural
                                networks allows representing rapidly varying free-energy surfaces, removes boundary
                                effects artifacts, and allows several collective variables to be handled.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/bonati2019.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           VAMPnets for deep learning of
                                        molecular kinetics
          </strong>
         </h4>
         <h7 style="color:blue;">
          Nature Communications
         </h7>
         <p class="text-muted">
          <em>
           Andreas Mardt and Luca Pasquali and Hao Wu and F. Noé
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         S2 TL;DR: A deep learning framework that automates construction of Markov state models
                                from MD simulation data is introduced that performs equally or better than
                                state-of-the-art Markov modeling methods and provides easily interpretable few-state
                                kinetic models.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/mardt2018.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Machine learning force fields
                                        and coarse-grained variables in molecular dynamics: application to materials and
                                        biological systems.
          </strong>
         </h4>
         <h7 style="color:blue;">
          Journal of chemical theory and computation
         </h7>
         <p class="text-muted">
          <em>
           P. Gkeka and G. Stoltz and A. Barati Farimani and Zineb
                                        Belkacemi and M. Ceriotti and J. Chodera and A. Dinner and Andrew L. Ferguson
                                        and J. Maillet and H. Minoux and C. Peter and F. Pietrucci and A. Silveira and
                                        A. Tkatchenko and Z. Trstanova and Rafal P. Wiewiora and T. Lelièvre
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Machine learning encompasses a set of tools and algorithms which are now becoming
                                popular in almost all scientific and technological fields. This is true for molecular
                                dynamics as well, where machine learning offers promises of extracting valuable
                                information from the enormous amounts of data generated by simulation of complex
                                systems. We provide here a review of our current understanding of goals, benefits, and
                                limitations of machine learning techniques for computational studies on atomistic
                                systems, focusing on the construction of empirical force fields from ab-initio databases
                                and the determination of reaction coordinates for free energy computation and enhanced
                                sampling.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/10.1021@acs.jctc.0c00355.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Progress in deep Markov state
                                        modeling: Coarse graining and experimental data restraints.
          </strong>
         </h4>
         <h7 style="color:blue;">
          The Journal of chemical physics
         </h7>
         <p class="text-muted">
          <em>
           Andreas Mardt and Frank No'e
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Recent advances in deep learning frameworks have established valuable tools for
                                analyzing the long-timescale behavior of complex systems, such as proteins. In
                                particular, the inclusion of physical constraints, e.g., time-reversibility, was a
                                crucial step to make the methods applicable to biophysical systems. Furthermore, we
                                advance the method by incorporating experimental observables into the model estimation
                                showing that biases in simulation data can be compensated for. We further develop a new
                                neural network layer in order to build a hierarchical model allowing for different
                                levels of details to be studied. Finally, we propose an attention mechanism, which
                                highlights important residues for the classification into different states. We
                                demonstrate the new methodology on an ultralong molecular dynamics simulation of the
                                Villin headpiece miniprotein.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/98243acffb45975b0fe73763b41316c520a7037a" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Machine learning for collective
                                        variable discovery and enhanced sampling in biomolecular simulation
          </strong>
         </h4>
         <h7 style="color:blue;">
          Molecular Physics
         </h7>
         <p class="text-muted">
          <em>
           Hythem Sidky and Wei Chen and Andrew L. Ferguson
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         Classical molecular dynamics simulates the time evolution of molecular systems through
                                the phase space spanned by the positions and velocities of the constituent atoms.
                                Molecular-level thermodynamic, kinetic, and structural data extracted from the resulting
                                trajectories provide valuable information for the understanding, engineering, and design
                                of biological and molecular materials. The cost of simulating many-body atomic systems
                                makes simulations of large molecules prohibitively expensive, and the
                                high-dimensionality of the resulting trajectories presents a challenge for analysis.
                                Driven by advances in algorithms, hardware, and data availability, there has been a
                                flare of interest in recent years in the applications of machine learning – especially
                                deep learning – to molecular simulation. These techniques have demonstrated great power
                                and flexibility in both extracting mechanistic understanding of the important nonlinear
                                collective variables governing the dynamics of a molecular system, and in furnishing
                                good low-dimensional system representations with which to perform enhanced sampling or
                                develop long-timescale dynamical models. It is the purpose of this article to introduce
                                the key machine learning approaches, describe how they are married with statistical
                                mechanical theory into domain-specific tools, and detail applications of these
                                approaches in understanding and accelerating biomolecular simulation. GRAPHICAL ABSTRACT
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="../Sci-Hub/VAE/10.1080@00268976.2020.1737742.pdf" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
     <div class="card col-12">
      <div class="card-wrapper">
       <div class="top-line row">
        <div class="col">
         <h4 class="card-title mbr-fonts-style display-5">
          <strong>
           Introduction to Markov state
                                        modeling with the PyEMMA software — v1.0
          </strong>
         </h4>
         <h7 style="color:blue;">
          None
         </h7>
         <p class="text-muted">
          <em>
           C. Wehmeyer and Martin K. Scherer and Tim Hempel and B. Husic
                                        and S. Olsson and F. Noé
          </em>
         </p>
        </div>
       </div>
       <hr class="hr5"/>
       <div class="bottom-line">
        <p class="ff3" style="font-size:20px;">
         This tutorial provides an introduction to the construction of Markov models of molec-
                                ular kinetics from molecular dynamics trajectory data with the PyEMMA software. Using
                                tutorial notebooks, we will guide the user through the basic functionality as well as
                                the more common advanced mechanisms. Short exercises to self check the learning progress
                                and a notebook on troubleshooting complete this basic introduction.
        </p>
       </div>
       <div class="mbr-section-btn item-footer mt-2 text-center">
        <a class="slide btn text-center" href="https://www.semanticscholar.org/paper/b505075d5f3bb937d2d191dfc0fdfd956790ef94" id="button" target="_blank">
        </a>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>

    <script>
        function check_read(){

            document.getElementById("123").style.backgroundColor = "lightblue";
        }
    </script>
    <script>
			function updater(d){
				// Get form data
				var name = d.getAttribute("data-id");
				console.log(name)
				
			}
	</script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js">
  </script>
  <script src="assets/smoothscroll/smooth-scroll.js">
  </script>
  <script src="assets/ytplayer/index.js">
  </script>
  <script src="assets/dropdown/js/navbar-dropdown.js">
  </script>
  <script src="assets/mbr-tabs/mbr-tabs.js">
  </script>
  <script src="assets/theme/js/script.js">
  </script>
  <script src="assets/formoid/formoid.min.js">
  </script>
  <script src="main.js">
  </script>
  <div class="scrollToTop mbr-arrow-up" id="scrollToTop">
   <a style="text-align: center;">
    <i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up">
    </i>
   </a>
  </div>
 </body>
</html>