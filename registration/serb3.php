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
  </div>    <section data-bs-version="5.1" class="features9 cid-tvA5SQ6yVu mbr-parallax-background" id="features10-j">
        <!---->



        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(190, 211, 249);">
        </div>
        <div class="container">
            <div class="mbr-section-head">
            <br><br>
                <h3 class="mbr-section-title mbr-fonts-style text-black mb-0 display-2">
                    <strong>Articles related to  <em style="color:red;">"AutoEncoder"</em></strong>
                </h3>
            </div>
            <hr class="hr5">
            <div class="row mt-4">                <div class="card col-12">
                        <div class="card-wrapper" id="update-div1">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Chemically Interpretable Graph Interaction Network for Prediction of Pharmacokinetic Properties of Drug-Like Molecules</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>Yashaswi Pathak and Siddhartha Laghuvarapu and Sarvesh Mehta and U. D. Priyakumar</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Solubility of drug molecules is related to pharmacokinetic properties such as absorption and distribution, which affects the amount of drug that is available in the body for its action. Computational or experimental evaluation of solvation free energies of drug-like molecules/solute that quantify solubilities is an arduous task and hence development of reliable computationally tractable models is sought after in drug discovery tasks in pharmaceutical industry. Here, we report a novel method based on graph neural network to predict solvation free energies. Previous studies considered only the solute for solvation free energy prediction and ignored the nature of the solvent, limiting their practical applicability. The proposed model is an end-to-end framework comprising three phases namely, message passing, interaction and prediction phases. In the first phase, message passing neural network was used to compute inter-atomic interaction within both solute and solvent molecules represented as molecular graphs. In the interaction phase, features from the preceding step is used to calculate a solute-solvent interaction map, since the solvation free energy depends on how (un)favorable the solute and solvent molecules interact with each other. The calculated interaction map that captures the solute-solvent interactions along with the features from the message passing phase is used to predict the solvation free energies in the final phase. The model predicts solvation free energies involving a large number of solvents with high accuracy. We also show that the interaction map captures the electronic and steric factors that govern the solubility of drug-like molecules and hence is chemically interpretable.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/cb84c2e0530922476a638a4c4b208e7428936e9b">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "1"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div2">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>MoleculeKit: Machine Learning Methods for Molecular Property Prediction and Drug Discovery</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>Zhengyang Wang and Meng Liu and Youzhi Luo and Zhao Xu and Yaochen Xie and Limei Wang and Lei Cai and Shuiwang Ji</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Properties of molecules are indicative of their functions and thus are useful in many applications. As a cost-effective alternative to experimental approaches, computational methods for predicting molecular properties are gaining increasing momentum and success. However, there lacks a comprehensive collection of tools and methods for this task currently. Here we develop the MoleculeKit, a suite of comprehensive machine learning tools spanning different computational models and molecular representations for molecular property prediction and drug discovery. Specifically, MoleculeKit represents molecules as both graphs and sequences. Built on these representations, MoleculeKit includes both deep learning and traditional machine learning methods for graph and sequence data. Noticeably, we propose and develop novel deep models for learning from molecular graphs and sequences. Therefore, MoleculeKit not only serves as a comprehensive tool, but also contributes towards developing novel and advanced graph and sequence learning methodologies. Results on both online and offline antibiotics discovery and molecular property prediction tasks show that MoleculeKit achieves consistent improvements over prior methods.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/b9dac216cf4a17e16e6ae06548bac803e90bcdd6">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "2"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div3">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>ANI-1: A data set of 20M off-equilibrium DFT calculations for organic molecules</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>Justin S. Smith and O. Isayev and A. Roitberg</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                One of the grand challenges in modern theoretical chemistry is designing and implementing approximations that expedite ab initio methods without loss of accuracy. Machine learning (ML), in particular neural networks, are emerging as a powerful approach to constructing various forms of transferable atomistic potentials. They have been successfully applied in a variety of applications in chemistry, biology, catalysis, and solid-state physics. However, these models are heavily dependent on the quality and quantity of data used in their fitting. Fitting highly flexible ML potentials comes at a cost: a vast amount of reference data is required to properly train these models. We address this need by providing access to a large computational DFT database, which consists of 20M conformations for 57,454 small organic molecules. We believe it will become a new standard benchmark for comparison of current and future methods in the ML potential community.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/1bdd37102e9907ee66c2729a6b050298bb46e00a">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "3"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div4">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Learning Multimodal Graph-to-Graph Translation for Molecular Optimization</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>Wengong Jin and Kevin Yang and R. Barzilay and T. Jaakkola</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We view molecular optimization as a graph-to-graph translation problem. The goal is to learn to map from one molecular graph to another with better properties based on an available corpus of paired molecules. Since molecules can be optimized in different ways, there are multiple viable translations for each input graph. A key challenge is therefore to model diverse translation outputs. Our primary contributions include a junction tree encoder-decoder for learning diverse graph translations along with a novel adversarial training method for aligning distributions of molecules. Diverse output distributions in our model are explicitly realized by low-dimensional latent vectors that modulate the translation process. We evaluate our model on multiple molecular optimization tasks and show that our model outperforms previous state-of-the-art baselines.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/8ee3ba29ad49c2ded00e88ee0dad1de17cc2b309">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "4"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div5">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>All SMILES Variational Autoencoder</strong></h4>
                                    <h7 style="color:blue;"> arXiv: Learning</h7>
                                    <p class="text-muted"> <em>Zaccary Alperstein and A. Cherkasov and J. Rolfe</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Variational autoencoders (VAEs) defined over SMILES string and graph-based representations of molecules promise to improve the optimization of molecular properties, thereby revolutionizing the pharmaceuticals and materials industries. However, these VAEs are hindered by the non-unique nature of SMILES strings and the computational cost of graph convolutions. To efficiently pass messages along all paths through the molecular graph, we encode multiple SMILES strings of a single molecule using a set of stacked recurrent neural networks, pooling hidden representations of each atom between SMILES representations, and use attentional pooling to build a final fixed-length latent representation. By then decoding to a disjoint set of SMILES strings of the molecule, our All SMILES VAE learns an almost bijective mapping between molecules and latent representations near the high-probability-mass subspace of the prior. Our SMILES-derived but molecule-based latent representations significantly surpass the state-of-the-art in a variety of fully- and semi-supervised property regression and molecular property optimization tasks.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/bdff01cb2ebc3643c48eaf2193d80d5f16e25d17">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "5"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div6">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Enhanced Deep‐Learning Prediction of Molecular Properties via Augmentation of Bond Topology</strong></h4>
                                    <h7 style="color:blue;"> ChemMedChem</h7>
                                    <p class="text-muted"> <em>Hyeoncheol Cho and I. Choi</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: While outperforming state‐of‐the‐art deep‐learning models in the prediction of chemical and biological properties, 3DGCN has the ability to both generalize and distinguish molecular rotations in 3D, beyond 2D, which has great impact on drug discovery and development, not to mention the design of chemical reactions.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/10.1002@cmdc.201900458.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "6"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div7">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Hierarchical Graph-to-Graph Translation for Molecules</strong></h4>
                                    <h7 style="color:blue;"> arXiv: Chemical Physics</h7>
                                    <p class="text-muted"> <em>Wengong Jin and R. Barzilay and T. Jaakkola</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The problem of accelerating drug discovery relies heavily on automatic tools to optimize precursor molecules to afford them with better biochemical properties. Our work in this paper substantially extends prior state-of-the-art on graph-to-graph translation methods for molecular optimization. In particular, we realize coherent multi-resolution representations by interweaving the encoding of substructure components with the atom-level encoding of the original molecular graph. Moreover, our graph decoder is fully autoregressive, and interleaves each step of adding a new substructure with the process of resolving its attachment to the emerging molecule. We evaluate our model on multiple molecular optimization tasks and show that our model significantly outperforms previous state-of-the-art baselines.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/b4303019c36d799b193b2b3214546601a9874baa">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "7"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div8">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>A LL SMILES V ARIATIONAL A UTOENCODER FOR M OLECULAR P ROPERTY P REDICTION AND O PTIMIZATION</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em></em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Variational autoencoders (VAEs) defined over SMILES string and graph-based representations of molecules promise to improve the optimization of molecular properties, thereby revolutionizing the pharmaceuticals and materials industries. However, these VAEs are hindered by the non-unique nature of SMILES strings and the computational cost of graph convolutions. To efficiently pass messages along all paths through the molecular graph, we encode multiple SMILES strings of a single molecule using a set of stacked recurrent neural networks, harmonizing hidden representations of each atom between SMILES representations, and use attentional pooling to build a final fixed-length latent representation. By then decoding to a disjoint set of SMILES strings of the molecule, our All SMILES VAE learns an almost bijective mapping between molecules and latent representations near the high-probability-mass subspace of the prior. Our SMILES-derived but moleculebased latent representations significantly surpass the state-of-the-art in a variety of fullyand semi-supervised property regression and molecular property optimization tasks.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/96fadf8a78514d77e3251c8e8281f78faa13ed29">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "8"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div9">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Neural Message Passing with Edge Updates for Predicting Properties of Molecules and Materials</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>P. B. Jørgensen and K. Jacobsen and Mikkel N. Schmidt</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Neural message passing on molecular graphs is one of the most promising methods for predicting formation energy and other properties of molecules and materials. In this work we extend the neural message passing model with an edge update network which allows the information exchanged between atoms to depend on the hidden state of the receiving atom. We benchmark the proposed model on three publicly available datasets (QM9, The Materials Project and OQMD) and show that the proposed model yields superior prediction of formation energies and other properties on all three datasets in comparison with the best published results. Furthermore we investigate different methods for constructing the graph used to represent crystalline structures and we find that using a graph based on K-nearest neighbors achieves better prediction accuracy than using maximum distance cutoff or the Voronoi tessellation graph.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/57986bf176c164cdd22c664ed2a75db3a0b3dbe0">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "9"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div10">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Delfos: deep learning model for prediction of solvation free energies in generic organic solvents</strong></h4>
                                    <h7 style="color:blue;"> Chemical Science</h7>
                                    <p class="text-muted"> <em>Hyuntae Lim and YounJoon Jung</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We introduce Delfos, a novel, machine-learning-based QSPR method which predicts solvation free energies for generic organic solutions.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/10.1039@C9SC02452B.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "10"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div11">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>BAND NN: A Deep Learning Framework for Energy Prediction and Geometry Optimization of Organic Small Molecules</strong></h4>
                                    <h7 style="color:blue;"> Journal of Computational Chemistry</h7>
                                    <p class="text-muted"> <em>Siddhartha Laghuvarapu and Yashaswi Pathak and U. D. Priyakumar</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Recent advances in artificial intelligence along with the development of large data sets of energies calculated using quantum mechanical (QM)/density functional theory (DFT) methods have enabled prediction of accurate molecular energies at reasonably low computational cost. However, machine learning models that have been reported so far require the atomic positions obtained from geometry optimizations using high‐level QM/DFT methods as input in order to predict the energies and do not allow for geometry optimization. In this study, a transferable and molecule size‐independent machine learning model bonds (B), angles (A), nonbonded (N) interactions, and dihedrals (D) neural network (BAND NN) based on a chemically intuitive representation inspired by molecular mechanics force fields is presented. The model predicts the atomization energies of equilibrium and nonequilibrium structures as sum of energy contributions from bonds (B), angles (A), nonbonds (N), and dihedrals (D) at remarkable accuracy. The robustness of the proposed model is further validated by calculations that span over the conformational, configurational, and reaction space. The transferability of this model on systems larger than the ones in the data set is demonstrated by performing calculations on selected large molecules. Importantly, employing the BAND NN model, it is possible to perform geometry optimizations starting from nonequilibrium structures along with predicting their energies. © 2019 Wiley Periodicals, Inc.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/10.1002@jcc.26128.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "11"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div12">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Hierarchical Generation of Molecular Graphs using Structural Motifs</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>Wengong Jin and R. Barzilay and T. Jaakkola</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Graph generation techniques are increasingly being adopted for drug discovery. Previous graph generation approaches have utilized relatively small molecular building blocks such as atoms or simple cycles, limiting their effectiveness to smaller molecules. Indeed, as we demonstrate, their performance degrades significantly for larger molecules. In this paper, we propose a new hierarchical graph encoder-decoder that employs significantly larger and more flexible graph motifs as basic building blocks. Our encoder produces a multi-resolution representation for each molecule in a fine-to-coarse fashion, from atoms to connected motifs. Each level integrates the encoding of constituents below with the graph at that level. Our autoregressive coarse-to-fine decoder adds one motif at a time, interleaving the decision of selecting a new motif with the process of resolving its attachments to the emerging molecule. We evaluate our model on multiple molecule generation tasks, including polymers, and show that our model significantly outperforms previous state-of-the-art baselines.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/dc7307f6e49f0ad2432be4eea92ae7f854c3cebb">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "12"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div13">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>ElemNet: Deep Learning the Chemistry of Materials From Only Elemental Composition</strong></h4>
                                    <h7 style="color:blue;"> Scientific Reports</h7>
                                    <p class="text-muted"> <em>Dipendra Jha and Logan T. Ward and Arindam Paul and W. Liao and A. Choudhary and C. Wolverton and Ankit Agrawal</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: The design and implementation of a deep neural network model referred to as ElemNet is presented; it automatically captures the physical and chemical interactions and similarities between different elements using artificial intelligence which allows it to predict the materials properties with better accuracy and speed.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/354a002bee13f4d93679c56769a324ae.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "13"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div14">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>All SMILES VAE</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>Zaccary Alperstein and A. Cherkasov and J. Rolfe</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Variational autoencoders (VAEs) defined over SMILES string and graph-based representations of molecules promise to improve the optimization of molecular properties, thereby revolutionizing the pharmaceuticals and materials industries. However, these VAEs are hindered by the non-unique nature of SMILES strings and the computational cost of graph convolutions. To efficiently pass messages along all paths through the molecular graph, we encode multiple SMILES strings of a single molecule using a set of stacked recurrent neural networks, pooling hidden representations of each atom between SMILES representations, and use attentional pooling to build a final fixed-length latent representation. By then decoding to a disjoint set of SMILES strings of the molecule, our All SMILES VAE learns an almost bijective mapping between molecules and latent representations near the high-probability-mass subspace of the prior. Our SMILES-derived but molecule-based latent representations significantly surpass the state-of-the-art in a variety of fully- and semi-supervised property regression and molecular property optimization tasks.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/5851fcd9ef3106957b0e12698cdd00e8c3c73e03">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "14"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div15">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>MLSolvA: solvation free energy prediction from pairwise atomistic interactions by machine learning</strong></h4>
                                    <h7 style="color:blue;"> Journal of Cheminformatics</h7>
                                    <p class="text-muted"> <em>Hyuntae Lim and YounJoon Jung</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: A novel ML-based solvation model, which calculates the solvation energy from pairwise atomistic interactions, which indicates that the model provides not only predictions of target properties but also more detailed physicochemical insights.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/lim2021.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "15"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div16">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Analyzing Learned Molecular Representations for Property Prediction</strong></h4>
                                    <h7 style="color:blue;"> Journal of Chemical Information and Modeling</h7>
                                    <p class="text-muted"> <em>Kevin Yang and Kyle Swanson and Wengong Jin and Connor W. Coley and Philipp Eiden and Hua Gao and A. Guzman-Perez and Timothy Hopper and Brian Kelley and M. Mathea and Andrew Palmer and Volker Settels and T. Jaakkola and K. Jensen and R. Barzilay</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Advancements in neural machinery have led to a wide range of algorithmic solutions for molecular property prediction. Two classes of models in particular have yielded promising results: neural networks applied to computed molecular fingerprints or expert-crafted descriptors and graph convolutional neural networks that construct a learned molecular representation by operating on the graph structure of the molecule. However, recent literature has yet to clearly determine which of these two methods is superior when generalizing to new chemical space. Furthermore, prior research has rarely examined these new models in industry research settings in comparison to existing employed models. In this paper, we benchmark models extensively on 19 public and 16 proprietary industrial data sets spanning a wide variety of chemical end points. In addition, we introduce a graph convolutional model that consistently matches or outperforms models using fixed molecular descriptors as well as previous graph neural architectures on both public and proprietary data sets. Our empirical findings indicate that while approaches based on these representations have yet to reach the level of experimental reproducibility, our proposed model nevertheless offers significant improvements over models currently used in industrial workflows.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/10.1021@acs.jcim.9b00237.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "16"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div17">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Enhancing materials property prediction by leveraging computational and experimental data using deep transfer learning</strong></h4>
                                    <h7 style="color:blue;"> Nature Communications</h7>
                                    <p class="text-muted"> <em>Dipendra Jha and K. Choudhary and F. Tavazza and W. Liao and A. Choudhary and C. Campbell and Ankit Agrawal</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: A highly accurate model for predicting formation energy of materials from their compositions with high accuracy is built, which is significantly better than existing machine learning (ML) prediction modeling based on DFT computations and is comparable to the MAE of DFT-computation itself.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/10.1038@s41467-019-13297-w.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "17"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div18">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Neural Message Passing on High Order Paths</strong></h4>
                                    <h7 style="color:blue;"> Mach. Learn. Sci. Technol.</h7>
                                    <p class="text-muted"> <em>Daniel Flam-Shepherd and Tony C Wu and Pascal Friederich and Alán Aspuru-Guzik</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Graph neural network have achieved impressive results in predicting molecular properties, but they do not directly account for local and hidden structures in the graph such as functional groups and molecular geometry. At each propagation step, GNNs aggregate only over first order neighbours, ignoring important information contained in subsequent neighbours as well as the relationships between those higher order connections. In this work, we generalize graph neural nets to pass messages and aggregate across higher order paths. This allows for information to propagate over various levels and substructures of the graph. We demonstrate our model on a few tasks in molecular property prediction.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/f7b550cba2d61b3fb676e72c92c245134363fda1">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "18"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div19">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Application of Artificial Intelligence for the Prediction of Solvation Free Energies for Covid-19 Drug Discovery</strong></h4>
                                    <h7 style="color:blue;"> Journal of Student Research</h7>
                                    <p class="text-muted"> <em>Sampreeth Immidisetty and Deepak Agrawal</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Solvation free energy is a key indicator of the effectiveness of a drug molecule. There are several applications of predicting the solvation free energies of chemical compounds using quantum mechanical methods. However, these methods take a long time and are costly. For that reason, the application of recently developed artificial intelligence techniques for the prediction of solvation free energies is becoming increasingly valuable in drug discovery to address time and the high-cost issues with traditional quantum mechanical approaches. In this paper, we present application of two different artificial intelligence models for predicting solute-solvent free solvation energy for Covid-19 drug design. The research involves building, training, evaluating and comparing the performances of the two models on a large dataset, then predicting solvation free energies for 138 known APIs and 28 organic solvents that could potentially be used as a Covid-19 medicine. The potential repurposing of 138 drugs for Covid-19 from solubility perspective is novel. We demonstrate the application of the AI models and derive several conclusions regarding suitability of the APIs and their efficacy. We conclude our research by providing insights on how our work can be put to future use towards drug development.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/911a8c40e3ab18e00a156e01378cc87aeb9049ec">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "19"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div20">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>ANI-1: an extensible neural network potential with DFT accuracy at force field computational cost† †Electronic supplementary information (ESI) available. See DOI: 10.1039/c6sc05720a Click here for additional data file.</strong></h4>
                                    <h7 style="color:blue;"> Chemical Science</h7>
                                    <p class="text-muted"> <em>J. S. Smith and O. Isayev and A. Roitberg</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We demonstrate how a deep neural network (NN) trained on a data set of quantum mechanical (QM) DFT calculated energies can learn an accurate and transferable atomistic potential for organic molecules containing H, C, N, and O atoms.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/smith2017.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "20"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div21">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Multi-resolution Autoregressive Graph-to-Graph Translation for Molecules</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>Wengong Jin and R. Barzilay and T. Jaakkola</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The problem of accelerating drug discovery relies heavily on automatic tools to optimize precursor molecules to afford them with better biochemical properties. Our work in this paper substantially extends prior state-of-the-art on graph-to-graph translation methods for molecular optimization. In particular, we realize coherent multi-resolution representations by interweaving trees over substructures with the atom-level encoding of the original molecular graph. Moreover, our graph decoder is fully autoregressive, and interleaves each step of adding a new substructure with the process of resolving its connectivity to the emerging molecule. We evaluate our model on multiple molecular optimization tasks and show that our model outperforms previous state-of-the-art baselines by a large margin.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/3921efa210a7f413cefa1d6bb6d37764e2c9ef04">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "21"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div22">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Meta-Learning Initializations for Low-Resource Drug Discovery</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>Cuong Q. Nguyen and Constantine Kreatsoulas and K. Branson</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Building in silico models to predict chemical properties and activities is a crucial step in drug discovery. However, drug discovery projects are often characterized by limited labeled data, hindering the applications of deep learning in
this setting. Meanwhile advances in meta-learning have enabled state-of-the-art
performances in few-shot learning benchmarks, naturally prompting the question: Can meta-learning improve deep learning performance in low-resource
drug discovery projects? In this work, we assess the efficiency of the Model-Agnostic Meta-Learning (MAML) algorithm – along with its variants FO-MAML
and ANIL – at learning to predict chemical properties and activities. Using the
ChEMBL20 dataset to emulate low-resource settings, our benchmark shows that
meta-initializations perform comparably to or outperform multi-task pre-training
baselines on 16 out of 20 in-distribution tasks and on all out-of-distribution tasks,
providing an average improvement in AUPRC of 7.2% and 14.9% respectively.
Finally, we observe that meta-initializations consistently result in the best performing models across fine-tuning sets with k ∈ {16, 32, 64, 128, 256} instances.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/918f6d965c7e45d15802eb3173058cfa8360e979">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "22"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div23">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Graph Convolutional Networks (GCNs) for Molecular Property Prediction in Drug Development Undergraduate Research Thesis</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>Yifan Song and Xia Ning</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Molecular property prediction is key to drug development. The rising of deep learning techniques provides new possibilities to learn the molecular properties directly from chemical data. In particular, graph convolutional networks have been introduced into the field and made significant enhancements compared to traditional methods. The first part of this paper serves as a study to explore and evaluate this emerging method while the second part demonstrates that graph convolution networks can be further improved by incorporating attention mechanism, another influential deep learning idea.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/4be7300f9f81fa3d012e32d200b922a6a9e921b3">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "23"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div24">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Symmetry-adapted generation of 3d point sets for the targeted discovery of molecules</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>N. Gebauer and M. Gastegger and Kristof T. Schütt</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Deep learning has proven to yield fast and accurate predictions of quantum-chemical properties to accelerate the discovery of novel molecules and materials. As an exhaustive exploration of the vast chemical space is still infeasible, we require generative models that guide our search towards systems with desired properties. While graph-based models have previously been proposed, they are restricted by a lack of spatial information such that they are unable to recognize spatial isomerism and non-bonded interactions. Here, we introduce a generative neural network for 3d point sets that respects the rotational invariance of the targeted structures. We apply it to the generation of molecules and demonstrate its ability to approximate the distribution of equilibrium structures using spatial metrics as well as established measures from chemoinformatics. As our model is able to capture the complex relationship between 3d geometry and electronic properties, we bias the distribution of the generator towards molecules with a small HOMO-LUMO gap - an important property for the design of organic solar cells.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/a1b0f1c32cb978da696cea6d8eb6da8b6973d590">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "24"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div25">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Generating equilibrium molecules with deep neural networks</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>N. Gebauer and M. Gastegger and Kristof T. Schütt</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Discovery of atomistic systems with desirable properties is a major challenge in chemistry and material science. Here we introduce a novel, autoregressive, convolutional deep neural network architecture that generates molecular equilibrium structures by sequentially placing atoms in three-dimensional space. The model estimates the joint probability over molecular configurations with tractable conditional probabilities which only depend on distances between atoms and their nuclear charges. It combines concepts from state-of-the-art atomistic neural networks with auto-regressive generative models for images and speech. We demonstrate that the architecture is capable of generating molecules close to equilibrium for constitutional isomers of C$_7$O$_2$H$_{10}$.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/b30ae2f01fdef352ba3fdeb2ce2817e3ba171e8d">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "25"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div26">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Scale-Aware Graph-Based Machine Learning for Accurate Molecular Property Prediction</strong></h4>
                                    <h7 style="color:blue;"> 2020 IEEE International Conference on Big Data (Big Data)</h7>
                                    <p class="text-muted"> <em>Gyoung S. Na and Hyun Woo Kim and Hyunju Chang</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                With great growth in the volume of chemical databases, machine learning receives significant attention from various scientific communities for efficient high-throughput screening of molecular properties and drug discovery on the millions of chemical compounds. In particular, graph neural networks (GNNs) have been widely studied in chemistry-related fields because a molecule is natively represented as a mathematical graph. In GNNs for the graph-level analysis, a global operation called readout is applied after node embedding to generate a graph-level embedding that represents characteristics of the whole graph. However, commonly used readouts frequently distort scale information of the graph and consequently degrade the prediction accuracy of GNNs. This problem becomes more serious in molecular machine learning because molecules have many important scale information (e.g., molecular weight and total energy). In this paper, we investigate this scale distortion problem in GNNs caused by the readouts for the first time and propose an efficient solution with a new attention-based readout. In the experiments, the proposed readout outperformed commonly used readouts on various GNN architectures.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/na2020.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "26"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div27">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Benchmark study on deep neural network potentials for small organic molecules</strong></h4>
                                    <h7 style="color:blue;"> Journal of Computational Chemistry</h7>
                                    <p class="text-muted"> <em>Rohit Modee and Siddhartha Laghuvarapu and U. D. Priyakumar</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                There has been tremendous advancement in machine learning (ML) applications in computational chemistry, particularly in neural network potentials (NNP). NNPs can approximate potential energy surface (PES) as a high dimensional function by learning from existing reference data, thereby circumventing the need to solve the electronic Schrödinger equation explicitly. As a result, ML accelerates chemical space exploration and property prediction compared to quantum mechanical methods. Novel ML methods have the potential to provide efficient means for predicting the properties of molecules. However, this potential has been limited by the lack of standard comparative evaluations. In this work, we compare four selected models, that is, ANI, PhysNet, SchNet, and BAND‐NN, developed to represent the PES of small organic molecules. We evaluate these models for their accuracy and transferability on two different test sets (i) Small organic molecules of up to eight‐heavy atoms on which ANI and SchNet achieve root mean square error (RMSE) of 0.55 and 0.60 kcal/mol, respectively. (ii) On random selection of molecules from the GDB‐11 database with 10‐heavy atoms, ANI achieves RMSE of 1.17 kcal/mol and SchNet achieves RMSE of 1.89 kcal/mol. We examine their ability to produce smooth meaningful surface by performing PES scans for bond stretch, angle bend, and dihedral rotations on relatively large molecules to assess their possible application in molecular dynamics simulations. We also evaluate their performance for yielding minimum energy structures via geometry optimization using various minimization algorithms. All these models were also able to accurately differentiate different isomers of the same empirical formula C10H20 . ANI and PhysNet achieve an RMSE of 0.29 and 0.52 kcal/mol, respectively, on C10H20 isomers.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/18fe2c30f59cbfc5b651379803bb8c6a6b4d9ff2">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "27"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div28">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>ANI-1, A data set of 20 million calculated off-equilibrium conformations for organic molecules</strong></h4>
                                    <h7 style="color:blue;"> Scientific Data</h7>
                                    <p class="text-muted"> <em>Justin S. Smith and O. Isayev and A. Roitberg</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: This work provides access to a large computational DFT database, which consists of more than 20 M off equilibrium conformations for 57,462 small organic molecules, and believes it will become a new standard benchmark for comparison of current and future methods in the ML potential community.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/smith2017.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "28"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div29">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>A Generative Model for Molecular Distance Geometry</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>G. Simm and José Miguel Hernández-Lobato</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Great computational effort is invested in generating equilibrium states for molecular systems using, for example, Markov chain Monte Carlo. We present a probabilistic model that generates statistically independent samples for molecules from their graph representations. Our model learns a low-dimensional manifold that preserves the geometry of local atomic neighborhoods through a principled learning representation that is based on Euclidean distance geometry. In a new benchmark for molecular conformation generation, we show experimentally that our generative model achieves state-of-the-art accuracy. Finally, we show how to use our model as a proposal distribution in an importance sampling scheme to compute molecular properties.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/c21d2d07cda6d8cb113de40fae726582d677ab3c">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "29"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div30">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Deep Learning in Chemistry</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical information and modeling</h7>
                                    <p class="text-muted"> <em>Adam C. Mater and M. Coote</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Machine learning enables computers to address problems by learning from data. Deep learning is a type of machine learning that uses a hierarchical recombination of features to extract pertinent information and then learn the patterns represented in the data. Over the last eight years, its abilities have increasingly been applied to a wide variety of chemical challenges, from improving computational chemistry to drug and materials design and even synthesis planning. This review aims to explain the concepts of deep learning to chemists from any background and follows this with an overview of the diverse applications demonstrated in the literature. We hope that this will empower the broader chemical community to engage with this burgeoning field and foster the growing movement of deep learning accelerated chemistry.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/10.1021@acs.jcim.9b00266.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "30"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div31">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Junction Tree Variational Autoencoder for Molecular Graph Generation</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>Wengong Jin and R. Barzilay and T. Jaakkola</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We seek to automate the design of molecules based on specific chemical properties. In computational terms, this task involves continuous embedding and generation of molecular graphs. Our primary contribution is the direct realization of molecular graphs, a task previously approached by generating linear SMILES strings instead of graphs. Our junction tree variational autoencoder generates molecular graphs in two phases, by first generating a tree-structured scaffold over chemical substructures, and then combining them into a molecule with a graph message passing network. This approach allows us to incrementally expand molecules while maintaining chemical validity at every step. We evaluate our model on multiple tasks ranging from molecular generation to optimization. Across these tasks, our model outperforms previous state-of-the-art baselines by a significant margin.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/fd17bd9a5dc24a081ad9743570f50dd6750f54b2">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "31"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div32">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Deep learning Enabled Molecule Design</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>Deva Priyakumar and Sarvesh Mehta</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The advent of modern machine learning and deep learning methods have revolutionized various fields such as computer vision, natural language processing, speech recognition, etc. In the the past decade these methods have made a profound impact in the field of natural science. Particularly, the computations involved in the field of molecular science have been greatly transformed with the advent of machine learning. These changes have resulted in tremendous reduction of time and cost involved in tasks such as molecular generation and property prediction, which are two crucial steps involved in the process of molecular design. In this thesis, two studies on in each of these is reported. First part of the thesis presents a deep learning based inorganic material generator (DING) framework consisting of a generator module and a predictor module. The generator module is developed based upon conditional variational autoencoders (CVAE) and the predictor module consists of three deep neural networks trained for predicting enthalpy of formation, volume per atom and energy per atom chosen to demonstrate the proposed method. The predictor and generator modules have been developed using a one-hot key representation of the material composition. A series of tests were done to examine the robustness of the predictor models, to demonstrate the continuity of the latent material space, and its ability to generate materials exhibiting target property values. The DING architecture proposed in this paper can be extended to other properties based on which the chemical space can be efficiently explored for interesting materials/molecules. Second part of the thesis presents an interpretable deep learning method based on graph networks that accurately predict solvation free energies of small organic molecules. The proposed model CIGIN, comprising of three phases, namely message passing, interaction and prediction is able to predict solvation free energies in any generic organic solvent with a mean absolute error of 0.16 kcal/mol. In terms of the accuracy, the CIGIN model outperforms all the proposed machine learning
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/c385fa8e470159bca06404955b91fe52a1804aa8">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "32"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div33">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>MEMES: Machine learning framework for Enhanced MolEcular Screening</strong></h4>
                                    <h7 style="color:blue;"> Chemical Science</h7>
                                    <p class="text-muted"> <em>Sarvesh Mehta and Siddhartha Laghuvarapu and Yashaswi Pathak and Aaftaab Sethi and Mallika Alvala and U. D. Priyakumar</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                In drug discovery applications, high throughput virtual screening exercises are routinely performed to determine an initial set of candidate molecules referred to as “hits”. In such an experiment, each molecule from a large small-molecule drug library is evaluated in terms of physical properties such as the docking score against a target receptor. In real-life drug discovery experiments, drug libraries are extremely large but still there is only a minor representation of the essentially infinite chemical space, and evaluation of physical properties for each molecule in the library is not computationally feasible. In the current study, a novel Machine learning framework for Enhanced MolEcular Screening (MEMES) based on Bayesian optimization is proposed for efficient sampling of the chemical space. The proposed framework is demonstrated to identify 90% of the top-1000 molecules from a molecular library of size about 100 million, while calculating the docking score only for about 6% of the complete library. We believe that such a framework would tremendously help to reduce the computational effort in not only drug-discovery but also areas that require such high-throughput experiments.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/mehta2021.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "33"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div34">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Learning Atomic Interactions through Solvation Free Energy Prediction Using Graph Neural Networks</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical information and modeling</h7>
                                    <p class="text-muted"> <em>Yashaswi Pathak and Sarvesh Mehta and U. D. Priyakumar</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Solvation free energy is a fundamental property that influences various chemical and biological processes, such as reaction rates, protein folding, drug binding, and bioavailability of drugs. In this work, we present a deep learning method based on graph networks to accurately predict solvation free energies of small organic molecules. The proposed model, comprising three phases, namely, message passing, interaction, and prediction, is able to predict solvation free energies in any generic organic solvent with a mean absolute error of 0.16 kcal/mol. In terms of accuracy, the current model outperforms all of the proposed machine learning-based models so far. The atomic interactions predicted in an unsupervised manner are able to explain the trends of free energies consistent with chemical wisdom. Further, the robustness of the machine learning-based model has been tested thoroughly, and its capability to interpret the predictions has been verified with several examples.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/pathak2021.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "34"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div35">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Deep learning enabled inorganic material generator.</strong></h4>
                                    <h7 style="color:blue;"> Physical chemistry chemical physics : PCCP</h7>
                                    <p class="text-muted"> <em>Yashaswi Pathak and K. Juneja and Girish Varma and M. Ehara and U. D. Priyakumar</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Recent years have witnessed utilization of modern machine learning approaches for predicting the properties of materials using available datasets. However, to identify potential candidates for material discovery, one has to systematically scan through a large chemical space and subsequently calculate the properties of all such samples. On the other hand, generative methods are capable of efficiently sampling the chemical space and can generate molecules/materials with desired properties. In this study, we report a deep learning based inorganic material generator (DING) framework consisting of a generator module and a predictor module. The generator module is developed based on conditional variational autoencoders (CVAEs) and the predictor module consists of three deep neural networks trained for predicting the enthalpy of formation, volume per atom and energy per atom chosen to demonstrate the proposed method. The predictor and generator modules have been developed using a one-hot key representation of the material composition. A series of tests were done to examine the robustness of the predictor models, to demonstrate the continuity of the latent material space, and its ability to generate materials exhibiting target property values. The DING architecture proposed in this paper can be extended to other properties based on which the chemical space can be efficiently explored for interesting materials/molecules.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/7cf4b1a630deed93d55188a96583bddaeaeb4b8a">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "35"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div36">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Graph Networks as a Universal Machine Learning Framework for Molecules and Crystals</strong></h4>
                                    <h7 style="color:blue;"> Chemistry of Materials</h7>
                                    <p class="text-muted"> <em>Chi Chen and Weike Ye and Yunxing Zuo and Chen Zheng and S. Ong</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Graph networks are a new machine learning (ML) paradigm that supports both relational reasoning and combinatorial generalization. Here, we develop, for the first time, universal MatErials Graph Network (MEGNet) models for accurate property prediction in both molecules and crystals. We demonstrate that our MEGNet models significantly outperform prior ML models in 11 out of 13 properties of the QM9 molecule data set. Furthermore, a single-task unified MEGNet model can accurately predict the internal energy at 0 K and room temperature, enthalpy and Gibbs free energy, with temperature, pressure and entropy being global state inputs. Similarly, we show that MEGNet models trained on $\sim 60,000$ crystals in the Materials Project substantially outperform prior ML models in the prediction of the formation energies, band gaps and elastic moduli of crystals, achieving better than DFT accuracy over a much larger data set. Such MEGNet models are highly interpretable, and well-established periodic chemical trends can be extracted from the elemental embeddings. Finally, we demonstrate the transfer learning of elemental embeddings from a property model trained on a larger data set (formation energies) to accelerate the training of property models with smaller amounts of data (band gaps and elastic moduli)
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/chen2019.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "36"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div37">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Solvent-Specific Featurization for Predicting Free Energies of Solvation through Machine Learning</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical information and modeling</h7>
                                    <p class="text-muted"> <em>Samuel T Hutchinson and R. Kobayashi</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                A featurization algorithm based on functional class fingerprints has been implemented within the DeepChem machine learning framework. It is based on descriptors more appropriate for solvation, taking into account intermolecular properties, and has been used in the prediction of free energies of solvation. Tests carried out on solvents with a range of polarity from the FreeSolv and MNSol data sets have shown slightly better accuracy than the commonly used topology-based extended connectivity fingerprint algorithm for hydration free energies. However, improvement was not as significant as hoped and less clear for less polar solvents suggesting that further solvent-specific descriptors may need to be taken into consideration.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/hutchinson2019.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "37"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div38">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Machine Learning for Accurate Force Calculations in Molecular Dynamics Simulations.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. A</h7>
                                    <p class="text-muted"> <em>Punyaslok Pattnaik and Shampa Raghunathan and Tarun Kalluri and P. Bhimalapuram and C. V. Jawahar and U. D. Priyakumar</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The computationally expensive nature of ab initio molecular dynamics simulations severely limits its ability to simulate large system sizes and long time scales, both of which are necessary to imitate experimental conditions. In this work, we explore an approach to make use of the data obtained using the quantum mechanical density functional theory (DFT) on small systems and use deep learning to subsequently simulate large systems by taking liquid argon as a test case. A suitable vector representation was chosen to represent the surrounding environment of each Ar atom, and a ΔNetFF machine learning model where, the neural network was trained to predict the difference in resultant forces obtained by DFT and classical force fields was introduced. Molecular dynamics simulations were then performed using forces from the neural network for various system sizes and time scales depending on the properties we calculated. A comparison of properties obtained from the classical force field and the neural network model was presented alongside available experimental data to validate the proposed method.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/06f302b4dbba24a5d55368d461f8cd3b441b588f">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "38"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div39">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Neural Message Passing for Quantum Chemistry</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>J. Gilmer and S. Schoenholz and Patrick F. Riley and Oriol Vinyals and George E. Dahl</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Supervised learning on molecules has incredible potential to be useful in chemistry, drug discovery, and materials science. Luckily, several promising and closely related neural network models invariant to molecular symmetries have already been described in the literature. These models learn a message passing algorithm and aggregation procedure to compute a function of their entire input graph. At this point, the next step is to find a particularly effective variant of this general approach and apply it to chemical prediction benchmarks until we either solve them or reach the limits of the approach. In this paper, we reformulate existing models into a single common framework we call Message Passing Neural Networks (MPNNs) and explore additional novel variations within this framework. Using MPNNs we demonstrate state of the art results on an important molecular property prediction benchmark; these results are strong enough that we believe future work should focus on datasets with larger molecules or more accurate ground truth labels.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/e24cdf73b3e7e590c2fe5ecac9ae8aa983801367">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "39"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div40">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Evaluation of Thermochemical Machine Learning for Potential Energy Curves and Geometry Optimization.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. A</h7>
                                    <p class="text-muted"> <em>Dakota Folmsbee and D. Koes and G. Hutchison</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                While many machine learning (ML) methods, particularly deep neural networks, have been trained for density functional and quantum chemical energies and properties, the vast majority of these methods focus on single-point energies. In principle, such ML methods, once trained, offer thermochemical accuracy on par with density functional and wave function methods but at speeds comparable to traditional force fields or approximate semiempirical methods. So far, most efforts have focused on optimized equilibrium single-point energies and properties. In this work, we evaluate the accuracy of several leading ML methods across a range of bond potential energy curves and torsional potentials. The methods were trained on the existing ANI-1 training set, calculated using the ωB97X/6-31G(d) single points at nonequilibrium geometries. We find that across a range of small molecules, several methods offer both qualitative accuracy (e.g., correct minima, both repulsive and attractive bond regions, anharmonic shape, and single minima) and quantitative accuracy in terms of the mean absolute percent error near the minima. At the moment, ANI-2x, FCHL, and a new libmolgrid-based convolutional neural net, the Colorful CNN, show good performance.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/cc87ca324fee19f58bb85a0ad5d9b965c5ad6014">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "40"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div41">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Molecule Property Prediction and Classification with Graph Hypernetworks</strong></h4>
                                    <h7 style="color:blue;"> ArXiv</h7>
                                    <p class="text-muted"> <em>Eliya Nachmani and Lior Wolf</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Graph neural networks are currently leading the performance charts in learning-based molecule property prediction and classification. Computational chemistry has, therefore, become the a prominent testbed for generic graph neural networks, as well as for specialized message passing methods. In this work, we demonstrate that the replacement of the underlying networks with hypernetworks leads to a boost in performance, obtaining state of the art results in various benchmarks. A major difficulty in the application of hypernetworks is their lack of stability. We tackle this by combining the current message and the first message. A recent work has tackled the training instability of hypernetworks in the context of error correcting codes, by replacing the activation function of the message passing network with a low-order Taylor approximation of it. We demonstrate that our generic solution can replace this domain-specific solution.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/3b07e81adf4e0cd6e9d202b299bc162b892e6fcf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "41"></a>';}?>
        
                            </div>
                        </div>
                    </div></div>
            </div>
        </div>
    </section>        
<script>
  
  // Access the array elements
  var passedArray = 
      <?php echo json_encode($items); ?>;
  // Display the array elements
  for(var i = 0; i < passedArray.length; i++){
    var div_id = "update-div".concat(i+1);
    elem = document.getElementById(div_id);
    if (passedArray[i] == 1){
        elem.setAttribute("style", "background-color:skyblue");}
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