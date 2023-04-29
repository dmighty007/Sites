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
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Explaining reaction coordinates of alanine dipeptide isomerization obtained from deep neural networks using Explainable Artificial Intelligence (XAI).</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Takuma Kikutsuji and Yusuke Mori and K. Okazaki and Toshifumi Mori and Kang-Min Kim and N. Matubayasi</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                A method for obtaining appropriate reaction coordinates is required to identify transition states distinguishing the product and reactant in complex molecular systems. Recently, abundant research has been devoted to obtaining reaction coordinates using artificial neural networks from deep learning literature, where many collective variables are typically utilized in the input layer. However, it is difficult to explain the details of which collective variables contribute to the predicted reaction coordinates owing to the complexity of the nonlinear functions in deep neural networks. To overcome this limitation, we used Explainable Artificial Intelligence (XAI) methods of the Local Interpretable Model-agnostic Explanation (LIME) and the game theory-based framework known as Shapley Additive exPlanations (SHAP). We demonstrated that XAI enables us to obtain the degree of contribution of each collective variable to reaction coordinates that is determined by nonlinear regressions with deep learning for the committor of the alanine dipeptide isomerization in vacuum. In particular, both LIME and SHAP provide important features to the predicted reaction coordinates, which are characterized by appropriate dihedral angles consistent with those previously reported from the committor test analysis. The present study offers an AI-aided framework to explain the appropriate reaction coordinates, which acquires considerable significance when the number of degrees of freedom increases.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/a077798a65ab902d84a43acf333da897b69ae4c9">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "1"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div2">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Nonlinear reaction coordinate analysis in the reweighted path ensemble.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>W. Lechner and J. Rogal and J. Juraszek and B. Ensing and P. Bolhuis</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We present a flexible nonlinear reaction coordinate analysis method for the transition path ensemble based on the likelihood maximization approach developed by Peters and Trout [J. Chem. Phys. 125, 054108 (2006)]. By parametrizing the reaction coordinate by a string of images in a collective variable space, we can optimize the likelihood that the string correctly models the committor data obtained from a path sampling simulation. The collective variable space with the maximum likelihood is considered to contain the best description of the reaction. The use of the reweighted path ensemble [J. Rogal et al., J. Chem. Phys. 133, 174109 (2010)] allows a complete reaction coordinate description from the initial to the final state. We illustrate the method on a z-shaped two-dimensional potential. While developed for use with path sampling, this analysis method can also be applied to regular molecular dynamics trajectories.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/lechner2010.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "2"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div3">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Identification of a multi-dimensional reaction coordinate for crystal nucleation in Ni3Al.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Yanyan Liang and Grisell Díaz Leines and R. Drautz and J. Rogal</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Nucleation during solidification in multi-component alloys is a complex process that comprises competition between different crystalline phases as well as chemical composition and ordering. Here, we combine transition interface sampling with an extensive committor analysis to investigate the atomistic mechanisms during the initial stages of nucleation in Ni3Al. The formation and growth of crystalline clusters from the melt are strongly influenced by the interplay between three descriptors: the size, crystallinity, and chemical short-range order of the emerging nuclei. We demonstrate that it is essential to include all three features in a multi-dimensional reaction coordinate to correctly describe the nucleation mechanism, where, in particular, the chemical short-range order plays a crucial role in the stability of small clusters. The necessity of identifying multi-dimensional reaction coordinates is expected to be of key importance for the atomistic characterization of nucleation processes in complex, multi-component systems.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/10.1063@5.0010074.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "3"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div4">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>The overdamped transmission coefficient: Recovering the true mean first passage time from an inaccurate reaction coordinate.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Ryan Yappert and Kartik Kamat and B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                For inertial reaction dynamics, a transition state theory rate constant obtained from an inaccurate reaction coordinate can be a posteriori corrected with reactive flux methods. In contrast, reaction coordinate errors in overdamped mean first passage time calculations cannot be a posteriori corrected. This work develops an overdamped version of the transmission coefficient. The calculation requires information from committor analyses and an estimate of the diffusivity along the committor coordinate. We illustrate the calculation for a simple two-dimensional potential that admits exact solutions.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/yappert2019.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "4"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div5">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Comment on "Toward identification of the reaction coordinate directly from the transition state ensemble using the kernel PCA method".</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                I their recent paper, 1 Antoniou and Schwartz present interesting and potentially powerful ideas for characterizing the transition state ensemble (TSE) by using kernel PCA (kPCA). We agree that kPCA could help summarize the characteristics of transition states in complex reaction mechanisms. We also commend Schwartz and co-workers for combining transition path sampling (TPS) and QM/MM methods. Their combined TPS QM/MM approach has great potential to understand whether conformational dynamics play a role in the chemical steps of enzyme catalysis. However, we are concerned about some aspects of the recent kPCA method and its results. The authors’ interpretations may lead to confusion and misconceptions about reaction coordinates. Of greater concern for some investigators, the results (including those from kPCA and their earlier works) may lead to some confusion about the mechanisms of enzyme catalysis. We begin by clarifying some aspects of the proposed kPCA method. The authors propose kPCA because, in their words, “the reaction coordinate consists of degrees of freedom along which the separatrix is thin”. The proposed definition is reasonable but somewhat restrictive because it requires that reaction coordinates be constructed from components along which distances (i.e., thinness) can be meaningfully compared. (Note that competing methods 7 are more general and also more efficient for reasons that we have given elsewhere. ) The proposed kPCAmethod has two steps: (1) Identify the mode with the largest covariance contribution in the TSE. The authors actually use a generalized covariance (polynomial kernel) to more clearly separate the dominant contributing mode from lesser contributors to the covariance. (2) Choose those residues which are least involved in the dominant mode from kPCA as components of the reaction coordinate. The reasoning behind this second step is that kPCA (step one) actually identified the mode along which the TSE is broadest and not the direction along which the TSE is thinnest. Note that the authors’ strategy identifies those residues which are not involved in the mode of maximum TSE variance as likely components of the reaction coordinate. Their strategy is not equivalent to choosing those residues that are involved in the mode of minimum TSE covariance. To identify the thinnest mode from the kPCA covariance matrix, one should instead diagonalize the kPCAmatrix and pick the eigenmodewith the smallest eigenvalue. Residues with large involvement in the thinnest direction might more reliably indicate components of the reaction coordinate. Among the many bath modes—nearly three per atom— the proposed kPCA method identifies just one bath mode. The residues that the authors select in step two are not involved in the dominant bath mode, but these residues may (and likely will) be involved in other unidentified bath modes. The reaction coordinate should be orthogonal to all of the bath modes and cannot be extracted from any one bath mode. We expect the TSE to be scattered along many important bath modes. The use of a polynomial (d = 2) kernel to isolate one dominant bath mode in the kPCA method therefore lacks a theoretical justification. However, examining the TSE with standard linear PCA could reveal the mode that contributes the most to the activation entropy (cf. eq 3.18 in the review by Hanggi et al. and see Van Kampen, chapter I.6, to connect the covariance matrix from PCA with d = 1 to the Hessian matrix). Linear PCA for the TSE might therefore help summarize diversity in the TSE, estimate kinetic prefactors in enzymatic reactions, or identify conformational motions that might be suppressed to narrow the reaction channel and thereby reduce the reaction rate. Thus, while the authors claim that linear PCA failed, further work in that direction may be very useful. Additionally, we emphasize that the kPCA method cannot describe the reaction coordinate at finer resolution than residue motions if only residue positions are used to construct the kPCA covariance matrix. This limitation is potentially important when the reaction coordinate varies between different stages of the reaction. As we have recently shown, the rate-promoting vibrations (RPV) model of enzymatic proton transfer by Antoniou and Schwartz shows exactly this behavior for low promoting vibrational mode frequencies. A preorganization step brings the donor and acceptor residues together by motion along the promoting vibrational mode. Then, the chemical step occurs, followed by a reorganization step where donor and acceptor residues separate. If the transition state corresponds to the chemical step, then kPCA based on residue positions alone will not identify the relevant chemical bonds in the chemical step. However, the chemical step is essential in the reaction coordinate if this step is the dynamical bottleneck. Without the chemical step, the preorganized donor and acceptor would just relax back to their typical distances with no reaction. One might interpret from the authors’ results on the lactate dehydrogenase (LDH) example that the chemical step is not important and therefore that the chemical step is not the dynamical bottleneck. Indeed, the authors appear to obtain sharply peaked histograms without constraining any coordinate corresponding to the chemical step. However, in the paper from
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/peters2011.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "5"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div6">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Common features of extraordinary rate theories.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We examine the capabilities and foundations of three landmark rate theories: harmonic transition state theory, classical nucleation theory, and the Marcus theory of electron transfer. Each of the three classic rate theories is widely used to predict rates and trends. They are also used "in reverse" to interpret experimental data with no computation at all. Their common foundations include a quasi-equilibrium assumption and dimensionality reduction to a physically meaningful, one-dimensional, and broadly applicable reaction coordinate. Many applications lie beyond the scope of the classic theories, so rare events research has pursued trajectory-based methods that efficiently predict accurate rate constants even when the reaction coordinate and mechanistic details are unknown. Trajectory based rare events methods achieved these ambitious goals, but (by construction) they provide rates rather than mechanistic understanding. We briefly discuss recent efforts to identify reaction coordinates, including methods which provide abstract statistically defined coordinates and those which identify physical collective variables. Finally, we note some natural synergies between existing simulation methods which might help discover simple and powerful quasi-equilibrium theories for the many applications that fall beyond the scope of the classic rate theories.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/peters2015.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "6"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div7">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Maximum Likelihood Analysis of Reaction Coordinates during Solidification in Ni.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>Grisell Díaz Leines and J. Rogal</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Understanding the underlying mechanism of crystal nucleation is a fundamental aspect in the prediction and control of materials properties. Classical nucleation theory (CNT) assumes that homogeneous nucleation occurs via random fluctuations within the supercooled liquid, that the structure of the growing clusters resembles the most stable bulk phase, and that the nucleus size is the sole reaction coordinate (RC) of the process. Many materials are, however, known to exhibit multiple steps during crystallization, forming different polymorphs. As a consequence, more complex RCs are often required to capture all relevant information about the process. Here, we employ transition path sampling together with a maximum likelihood analysis of candidate order parameters to identify suitable RCs for the nucleation mechanism during solidification in Ni. In contrast to CNT, the analysis of the reweighted path ensemble shows that a prestructured liquid region that surrounds the crystal cluster is a relevant order parameter that enhances the RC and therefore plays a key role in the description of the nucleus and the interfacial free energy. We demonstrate that prestructured liquid clusters that emerge within the liquid act as precursors of the crystallization in a nonclassical two-step mechanism, which predetermines the coordination of the selected polymorphs.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/8838c0c560ddbd037e3e1cb7381cdf65.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "7"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div8">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Learning reaction coordinates via cross-entropy minimization: Application to alanine dipeptide.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Y. Mori and K. Okazaki and Toshifumi Mori and Kang-Min Kim and N. Matubayasi</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We propose a cross-entropy minimization method for finding the reaction coordinate from a large number of collective variables in complex molecular systems. This method is an extension of the likelihood maximization approach describing the committor function with a sigmoid. By design, the reaction coordinate as a function of various collective variables is optimized such that the distribution of the committor pB * values generated from molecular dynamics simulations can be described in a sigmoidal manner. We also introduce the L2-norm regularization used in the machine learning field to prevent overfitting when the number of considered collective variables is large. The current method is applied to study the isomerization of alanine dipeptide in vacuum, where 45 dihedral angles are used as candidate variables. The regularization parameter is determined by cross-validation using training and test datasets. It is demonstrated that the optimal reaction coordinate involves important dihedral angles, which are consistent with the previously reported results. Furthermore, the points with pB *∼0.5 clearly indicate a separatrix distinguishing reactant and product states on the potential of mean force using the extracted dihedral angles.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/mori2020.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "8"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div9">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Optimal reaction coordinates and kinetic rates from the projected dynamics of transition paths</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>Line Mouaffac and Karen Palacio-Rodríguez and F. Pietrucci</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Finding optimal reaction coordinates and predicting accurate kinetic rates for activated processes are two of the foremost challenges of molecular simulations. We introduce an algorithm that tackles the two problems at once: starting from a limited number of reactive molecular dynamics trajectories (transition paths), we automatically generate with a Monte Carlo approach a sequence of different reaction coordinates that progressively reduce the kinetic rate of their projected effective dynamics. Based on a variational principle, the minimal rate accurately approximates the exact one, and it corresponds to the optimal reaction coordinate. After benchmarking the method on an analytic double-well system, we apply it to complex atomistic systems: the interaction of carbon nanoparticles of different sizes in water.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/8398fe0946df066193b382497450d704fd892f9b">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "9"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div10">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Transition Path Sampling as Markov Chain Monte Carlo of Trajectories: Recent Algorithms, Software, Applications, and Future Outlook</strong></h4>
                                    <h7 style="color:blue;"> Advanced Theory and Simulations</h7>
                                    <p class="text-muted"> <em>P. Bolhuis and David W. H. Swenson</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The development of enhanced sampling methods to investigate rare but important events has always been a focal point in the molecular simulation field. Such methods often rely on prior knowledge of the reaction coordinate. However, the search for this reaction coordinate is at the heart of the rare event problem. Transition path sampling (TPS) circumvents this problem by generating an ensemble of dynamical trajectories undergoing the activated event. The reaction coordinate is extracted from the resulting path ensemble using variants of machine learning, making it an output of the method instead of an input. Over the last 20 years, since its inception, many extensions of TPS have been developed. Perhaps surprisingly, large‐scale TPS simulations on complex molecular systems have become possible only recently. Other important developments include the transition interface sampling (TIS) methodology to compute rate constants, the application to multiple states, and adaptive path sampling. The development of OpenPathSampling and PyRETIS has enabled easy and flexible use and implementation of these and other novel path sampling algorithms. In this progress report, a brief overview of recent developments, novel algorithms, and software is given. In addition, several application areas are discussed, and a future outlook for the next decade is given.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/bolhuis2021.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "10"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div11">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Reaction coordinates in complex systems-a perspective</strong></h4>
                                    <h7 style="color:blue;"> The European Physical Journal B</h7>
                                    <p class="text-muted"> <em>J. Rogal</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: This perspective highlights central aspects in the identification and evaluation of reaction coordinate and discusses recent ideas regarding automated computational frameworks to combine the optimization of reaction coordinates and enhanced sampling.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/84c2c52b4a9cbb48b5a04b55356615bb588ed216">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "11"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div12">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Kinetic energy flows in activated dynamics of biomolecules.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Huiyu Li and Ao Ma</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Protein conformational changes are activated processes essential for protein functions. Activation in a protein differs from activation in a small molecule in that it involves directed and systematic energy flows through preferred channels encoded in the protein structure. Understanding the nature of these energy flow channels and how energy flows through them during activation is critical for understanding protein conformational changes. We recently [W. Li and A. Ma, J. Chem. Phys. 144, 114103 (2016)] developed a rigorous statistical mechanical framework for understanding potential energy flows. Here, we complete this theoretical framework with a rigorous theory for kinetic energy flows: potential and kinetic energies interconvert when impressed forces oppose inertial forces, whereas kinetic energy transfers directly from one coordinate to another when inertial forces oppose each other. This theory is applied to analyzing a prototypic system for biomolecular conformational dynamics: the isomerization of an alanine dipeptide. Among the two essential energy flow channels for this process, dihedral ϕ confronts the activation barrier, whereas dihedral θ1 receives energy from potential energy flows. Intriguingly, θ1 helps ϕ to cross the activation barrier by transferring to ϕ via direct kinetic energy flow all the energy it received-an increase in θ̇1 caused by potential energy flow converts into an increase in ϕ̇. As a compensation, θ1 receives kinetic energy from bond angle α via a direct mechanism and bond angle β via an indirect mechanism.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/li2020.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "12"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div13">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>p(TP|q) peak maximization: Necessary but not sufficient for reaction coordinate accuracy</strong></h4>
                                    <h7 style="color:blue;"> Chemical Physics Letters</h7>
                                    <p class="text-muted"> <em>B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                null
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/peters2010.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "13"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div14">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Reaction coordinates and mechanisms</strong></h4>
                                    <h7 style="color:blue;"> None</h7>
                                    <p class="text-muted"> <em>B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                null
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/peters2017.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "14"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div15">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Reducing the cost of evaluating the committor by a fitting procedure.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Wenjin Li and Ao Ma</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Correct identification of reaction coordinates in complex systems is essential for understanding the mechanisms of their reaction dynamics. Existing methods for identifying reaction coordinates typically require knowledge of the committor--the probability of a given configuration to reach the product basin. The high computational cost of evaluating committors has limited applications of methods for identifying reaction coordinates. We proposed a fitting procedure that can reduce the cost of evaluating committors by an order of magnitude or more. The method only requires evaluating the committors of a few configurations in a transition path by the standard and costly shooting procedure. The committors of the other configurations are then estimated with great accuracy by a sigmoid function derived from fitting the few numerically evaluated committors. The method has been systematically tested on a model system of a Brownian particle moving in a one-dimensional double-well potential, and a small biomolecular system--the isomerization of alanine dipeptide in vacuum and in explicit water.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/li2015.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "15"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div16">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Approximating free energy and committor landscapes in standard transition path sampling using virtual interface exchange.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Z. F. Brotzakis and P. Bolhuis</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Transition path sampling is a powerful technique for investigating rare transitions, especially when the mechanism is unknown and one does not have access to the reaction coordinate. Straightforward application of transition path sampling does not directly provide the free energy landscape nor the kinetics. This drawback has motivated the development of path sampling extensions able to simultaneously access both kinetics and thermodynamics, such as transition interface sampling, and the reweighted path ensemble. However, performing transition interface sampling is more involved than standard two-state transition path sampling and still requires (some) insight into the reaction to define interfaces. While packages that can efficiently compute path ensembles for transition interface sampling are now available, it would be useful to directly compute the free energy from a single standard transition path sampling simulation. To achieve this, we present here an approximate method, denoted virtual interface exchange transition path sampling, that makes use of the rejected pathways in a form of waste recycling. The method yields an approximate reweighted path ensemble that allows an immediate view of the free energy landscape from a standard single transition path sampling simulation, as well as enables a committor analysis.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/brotzakis2019.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "16"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div17">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Extensions to the likelihood maximization approach for finding reaction coordinates.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>B. Peters and G. Beckham and B. Trout</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                This paper extends our previous work on obtaining reaction coordinates from aimless shooting and likelihood maximization. We introduce a simplified version of aimless shooting and a half-trajectory likelihood score based on the committor probability. Additionally, we analyze and compare the absolute log-likelihood score for perfect and approximate reaction coordinates. We also compare the aimless shooting and likelihood maximization approach to the earlier genetic neural network (GNN) approach of Ma and Dinner [J. Phys. Chem. B 109, 6769 (2005)]. For a fixed number of total trajectories in the GNN approach, the accuracy of the transition state ensemble decreases as the number of trajectories per committor probability estimate increases. This quantitatively demonstrates the benefit of individual committor probability realizations over committor probability estimates. Furthermore, when the least squares score of the GNN approach is applied to individual committor probability realizations, the likelihood score still provides a better approximation to the true transition state surface. Finally, the polymorph transition in terephthalic acid demonstrates that the new half-trajectory likelihood scheme estimates the transition state location more accurately than likelihood schemes based on the probability of being on a transition path.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/peters2007.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "17"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div18">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>A benchmark for reaction coordinates in the transition path ensemble.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Wenjin Li and Ao Ma</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The molecular mechanism of a reaction is embedded in its transition path ensemble, the complete collection of reactive trajectories. Utilizing the information in the transition path ensemble alone, we developed a novel metric, which we termed the emergent potential energy, for distinguishing reaction coordinates from the bath modes. The emergent potential energy can be understood as the average energy cost for making a displacement of a coordinate in the transition path ensemble. Where displacing a bath mode invokes essentially no cost, it costs significantly to move the reaction coordinate. Based on some general assumptions of the behaviors of reaction and bath coordinates in the transition path ensemble, we proved theoretically with statistical mechanics that the emergent potential energy could serve as a benchmark of reaction coordinates and demonstrated its effectiveness by applying it to a prototypical system of biomolecular dynamics. Using the emergent potential energy as guidance, we developed a committor-free and intuition-independent method for identifying reaction coordinates in complex systems. We expect this method to be applicable to a wide range of reaction processes in complex biomolecular systems.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/li2016.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "18"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div19">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Optimizing Nucleus Size Metrics for Liquid-Solid Nucleation from Transition Paths of Near-Nanosecond Duration.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry letters</h7>
                                    <p class="text-muted"> <em>G. Beckham and B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We determine the mechanism for the liquid-solid phase transition in the Lennard-Jones fluid close to coexistence with aimless shooting and likelihood maximization. The reaction coordinate for this process is a product of a structural descriptor and the size of the nascent solid nucleus and is quantitatively verified with the committor probability histogram test. This study identifies the first accurate scalar reaction coordinate for the liquid-solid nucleation process in Lennard-Jonesium, which will likely extend to nucleation processes in other spherically symmetric fluids. On the basis of our results, we propose a structural correction factor for the commonly cited nucleus size reaction coordinate from classical nucleation theory that enables connection of simulation data to stochastic models of nucleation kinetics. In addition, we show that aimless shooting is able to obtain reasonable acceptance rates for transitions with highly diffusive characteristics, which has been problematic for transition path sampling methods for diffusive processes such as nucleation and macromolecular transitions.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/beckham2011.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "19"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div20">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>A maximum caliber approach for continuum path ensembles</strong></h4>
                                    <h7 style="color:blue;"> The European Physical Journal B</h7>
                                    <p class="text-muted"> <em>P. Bolhuis and Z. F. Brotzakis and M. Vendruscolo</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: This review describes how this approach recently used a framework, called here the continuum path ensemble maximum caliber (CoPE-MaxCal) method, to impose kinetic constraints in molecular simulations, for instance to include experimental information about transition rates.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/846e7b6c4209df22fd83542db3ad76a22b8913e2">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "20"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div21">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Optimal reaction coordinates</strong></h4>
                                    <h7 style="color:blue;"> Wiley Interdisciplinary Reviews: Computational Molecular Science</h7>
                                    <p class="text-muted"> <em>P. Banushkina and S. Krivov</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The dynamic behavior of complex systems with many degrees of freedom is often analyzed by projection onto one or a few reaction coordinates. The dynamics is then described in a simple and intuitive way as diffusion on the associated free‐energy profile. In order to use such a picture for a quantitative description of the dynamics one needs to select the coordinate in an optimal way so as to minimize non‐Markovian effects due to the projection. For equilibrium dynamics between two boundary states (e.g., a reaction), the optimal coordinate is known as the committor or the pfold coordinate in protein folding studies. While the dynamics projected on the committor is not Markovian, many important quantities of the original multidimensional dynamics on an arbitrarily complex landscape can be computed exactly. In this study, we summarize the derivation of this result, discuss different approaches to determine and validate the committor coordinate, and present three illustrative applications: protein folding, the game of chess, and patient recovery dynamics after kidney transplant. WIREs Comput Mol Sci 2016, 6:748–763. doi: 10.1002/wcms.1276
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/banushkina2016.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "21"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div22">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Transmission Coefficients, Committors, and Solvent Coordinates in Ion-Pair Dissociation.</strong></h4>
                                    <h7 style="color:blue;"> Journal of chemical theory and computation</h7>
                                    <p class="text-muted"> <em>R. Mullen and J. Shea and B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                From a hypothetical perfect dividing surface, all trajectories commit to opposite basins in forward and backward time without recrossing, transition state theory is exact, the transmission coefficient is one, and the committor distribution is perfectly focused at 1/2. However, chemical reactions in solution and other real systems often have dynamical trajectories that recross the dividing surface. To separate true dynamical effects from effects of a nonoptimal dividing surface, the dividing surface and/or reaction coordinate should be optimized before computing transmission coefficients. For NaCl dissociation in TIP3P water, we show that recrossing persists even when the 1/2-committor surface itself is used as the dividing surface, providing evidence that recrossing cannot be fully eliminated from the dynamics for any configurational coordinate. Consistent with this finding, inertial likelihood maximization finds a combination of ion-pair distance and two solvent coordinates that improves the committor distribution and increases the transmission coefficient relative to those for ion-pair distance alone, but recrossing is not entirely eliminated. Free energy surfaces for the coordinates identified by inertial likelihood maximization show that the intrinsic recrossing stems from anharmonicity and shallow intermediates that remain after dimensionality reduction to the dynamically important variables.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/mullen2014.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "22"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div23">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Equipartition terms in transition path ensemble: Insights from molecular dynamics simulations of alanine dipeptide.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Wenjin Li</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Transition path ensemble consists of reactive trajectories and possesses all the information necessary for the understanding of the mechanism and dynamics of important condensed phase processes. However, quantitative description of the properties of the transition path ensemble is far from being established. Here, with numerical calculations on a model system, the equipartition terms defined in thermal equilibrium were for the first time estimated in the transition path ensemble. It was not surprising to observe that the energy was not equally distributed among all the coordinates. However, the energies distributed on a pair of conjugated coordinates remained equal. Higher energies were observed to be distributed on several coordinates, which are highly coupled to the reaction coordinate, while the rest were almost equally distributed. In addition, the ensemble-averaged energy on each coordinate as a function of time was also quantified. These quantitative analyses on energy distributions provided new insights into the transition path ensemble.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/li2018.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "23"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div24">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Inertial likelihood maximization for reaction coordinates with high transmission coefficients</strong></h4>
                                    <h7 style="color:blue;"> Chemical Physics Letters</h7>
                                    <p class="text-muted"> <em>B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                null
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/peters2012.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "24"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div25">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Hopping of water in a glassy polymer studied via transition path sampling and likelihood maximization.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>L. Xi and Manas Shah and B. Trout</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Diffusion of small molecules in amorphous polymers is known to follow a form of so-called hopping motion: penetrant molecules are trapped in microscopic cavities for extended time periods; diffusion is made possible by rare but fast jumps between neighboring cavities. Existing understanding of the hopping mechanism is based on the inspection of molecular images during individual molecular-dynamics trajectories. We focus on the diffusion of water molecules in a hydrophilic polymer below its glass transition temperature. The transition path ensemble of one hopping event is sampled with aimless shooting, a type of transition path sampling technique. In these trajectories, configurations of both the penetrant and the polymer change during the transition. Statistical analysis of the ensemble using likelihood maximization leads to a reaction coordinate of the transition, whose key components include the penetrant configuration and distances between penetrant-host atom pairs that have strong electrostatic interactions. Polymer motions do not contribute directly to the reaction coordinate. This result points toward a transition mechanism dominated by the penetrant movement. Molecular insights from this study can benefit the development of computational tools that better predict material transport properties, facilitating the design of new materials, including polymers with engineered drying properties.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/xi2013.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "25"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div26">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Reaction coordinates, one-dimensional Smoluchowski equations, and a test for dynamical self-consistency.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>B. Peters and P. Bolhuis and R. Mullen and J. Shea</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We propose a method for identifying accurate reaction coordinates among a set of trial coordinates. The method applies to special cases where motion along the reaction coordinate follows a one-dimensional Smoluchowski equation. In these cases the reaction coordinate can predict its own short-time dynamical evolution, i.e., the dynamics projected from multiple dimensions onto the reaction coordinate depend only on the reaction coordinate itself. To test whether this property holds, we project an ensemble of short trajectory swarms onto trial coordinates and compare projections of individual swarms to projections of the ensemble of swarms. The comparison, quantified by the Kullback-Leibler divergence, is numerically performed for each isosurface of each trial coordinate. The ensemble of short dynamical trajectories is generated only once by sampling along an initial order parameter. The initial order parameter should separate the reactants and products with a free energy barrier, and distributions on isosurfaces of the initial parameter should be unimodal. The method is illustrated for three model free energy landscapes with anisotropic diffusion. Where exact coordinates can be obtained from Kramers-Langer-Berezhkovskii-Szabo theory, results from the new method agree with the exact results. We also examine characteristics of systems where the proposed method fails. We show how dynamical self-consistency is related (through the Chapman-Kolmogorov equation) to the earlier isocommittor criterion, which is based on longer paths.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/peters2013.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "26"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div27">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Reaction mechanism and reaction coordinates from the viewpoint of energy flow.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Wenjin Li and Ao Ma</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Reaction coordinates are of central importance for correct understanding of reaction dynamics in complex systems, but their counter-intuitive nature made it a daunting challenge to identify them. Starting from an energetic view of a reaction process as stochastic energy flows biased towards preferred channels, which we deemed the reaction coordinates, we developed a rigorous scheme for decomposing energy changes of a system, both potential and kinetic, into pairwise components. The pairwise energy flows between different coordinates provide a concrete statistical mechanical language for depicting reaction mechanisms. Application of this scheme to the C7eq → C7ax transition of the alanine dipeptide in vacuum revealed novel and intriguing mechanisms that eluded previous investigations of this well studied prototype system for biomolecular conformational dynamics. Using a cost function developed from the energy decomposition components by proper averaging over the transition path ensemble, we were able to identify signatures of the reaction coordinates of this system without requiring any input from human intuition.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/li2016.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "27"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div28">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Potential Energy Weighted Reactive Flux and Total Rate of Change of Potential Energy: Theory and Illustrative Applications</strong></h4>
                                    <h7 style="color:blue;"> bioRxiv</h7>
                                    <p class="text-muted"> <em>Wenjin Li</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Reactive flux can be largely non-zero in a nonequilibrium ensemble of trajectories and provide insightful information for reactive transitions from the reactant state to the product state. Based on the reactive flux, a theoretical framework is proposed here for two quantities, the potential energy weighted reactive flux and the total rate of change of potential energy, which are useful for the identification of mechanism from a nonequilibrium ensemble. From such quantities, two multidimensional free energy analogues can be derived in the subspace of collective variables and they are equivalent in the regions where the reactive flux is divergence-free. These free energy analogues are assumed to be closely related to the free energy in the subspace of collective variables and they are reduced in the one-dimensional case to be the ensemble average of the potential energy weighted with reactive flux intensity, which was proposed recently and could be decomposed into energy components at the per-coordinate level. In the subspace of collective variables, the decomposition of the multidimensional free energy analogues at the per-coordinate level is theoretically possible and is numerically difficult to be calculated. Interestingly, the total rate of change of potential energy is able to identify the location of the transition state ensemble or the stochastic separatrix, in addition to the locations of the reactant and product states. The total rate of change of potential energy can be decomposed at the per-coordinate level and its components can quantify the contribution of a coordinate to the reactive transition in the subspace of collective variables. We then illustrated the main insights and objects that can be provided by the approach in the application to the alanine peptide in vacuum in various nonequilibrium ensembles of short trajectories and the results from these ensembles were found to be consistent.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/44737437f3f3b32d7ebfb3743103f0e4f353c970">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "28"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div29">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Determination of the Reaction Coordinate for a Key Conformational Fluctuation in Human Carbonic Anhydrase II.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>Sanjib Paul and S. Taraphder</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                During the reversible hydration of carbon dioxide into bicarbonate by the enzyme human carbonic anhydrase II, the rate-determining step of proton transfer across the active site has been suggested to involve side chain rotation of the residue His-64 shuttling an excess proton in and out of the active site. In the present article, we have determined the reaction coordinate for this catalytically important conformational transition starting from a set of 32 order parameters (or candidate collective variables). Following the original work by Peters and Trout (J. Chem. Phys. 2006, 125, 054108), unbiased dynamical transition paths connecting the two major side chain conformations are harvested using an aimless shooting algorithm, and the reaction coordinate is determined using the method of forward-trajectory likelihood maximization. Several different models are tested involving a single order parameter or linear combinations of several of them chosen from the preselected set. An optimum reaction coordinate, identified using a Bayesian information criterion, is found to be a linear combination of 4 order parameters. This reaction coordinate is subsequently utilized to explore the associated free energy profile and diffusive barrier crossing dynamics. To the best of our knowledge, previous instances of this calculation include only alanine dipeptide and photoactive yellow protein (125 residues) in explicit water solvent. The present work is the first report of a quantitative determination of the reaction coordinate for conformational transition in a protein having as many as 259 residues in the presence of explicit water and sampled near the free energy barrier for about 1 μs.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/paul2015.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "29"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div30">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Committor-Consistent Variational String Method.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry letters</h7>
                                    <p class="text-muted"> <em>Ziwei He and C. Chipot and Benoı T Roux</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The treatment of slow and rare transitions in the simulation of complex systems poses a great computational challenge. A powerful approach to tackle this challenge is the string method, which represents the transition path as a one-dimensional curve in a multidimensional space of collective variables. Commonly used strategies for pathway optimization include aligning the tangent of the string to the local mean force or to the mean drift determined from swarms of short trajectories. Here, a novel strategy is proposed, allowing the string to be optimized based on a variational principle involving the unidirectional reactive flux expressed in terms of the time-correlation function of the committor. The method is illustrated with model systems and then probed with the alanine dipeptide and a coarse-grained model of the barstar-barnase protein complex. Successive iterations variationally refine the string toward an optimal transition pathway following the gradient of the committor between two metastable states.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/c509136e2d8009ba96bb122c08a8597f885141b2">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "30"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div31">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Atomistic insight into the kinetic pathways for Watson–Crick to Hoogsteen transitions in DNA</strong></h4>
                                    <h7 style="color:blue;"> Nucleic Acids Research</h7>
                                    <p class="text-muted"> <em>J. Vreede and A. Pérez de Alba Ortíz and P. Bolhuis and David W. H. Swenson</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Abstract DNA predominantly contains Watson–Crick (WC) base pairs, but a non-negligible fraction of base pairs are in the Hoogsteen (HG) hydrogen bonding motif at any time. In HG, the purine is rotated ∼180° relative to the WC motif. The transitions between WC and HG may play a role in recognition and replication, but are difficult to investigate experimentally because they occur quickly, but only rarely. To gain insight into the mechanisms for this process, we performed transition path sampling simulations on a model nucleotide sequence in which an AT pair changes from WC to HG. This transition can occur in two ways, both starting with loss of hydrogen bonds in the base pair, followed by rotation around the glycosidic bond. In one route the adenine base converts from WC to HG geometry while remaining entirely within the double helix. The other route involves the adenine leaving the confines of the double helix and interacting with water. Our results indicate that this outside route is more probable. We used transition interface sampling to compute rate constants and relative free energies for the transitions between WC and HG. Our results agree with experiments, and provide highly detailed insights into the mechanisms of this important process.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/oup-accepted-manuscript-2019.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "31"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div32">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>On the Relation Between Projections of the Reweighted Path Ensemble</strong></h4>
                                    <h7 style="color:blue;"> Journal of Statistical Physics</h7>
                                    <p class="text-muted"> <em>P. Bolhuis and W. Lechner</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                S2 TL;DR: This work derives several distribution functions for the recently introduced reweighted path ensemble, the configurational and path densities, the reactive current, and the generalized committors for the different path types, and derives the path sampling shooting point distributions.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/bolhuis2011.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "32"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div33">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Nonlinear Reaction Coordinate of an Enzyme Catalyzed Proton Transfer Reaction.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>T. Paul and S. Taraphder</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We present an in-depth study on the theoretical calculation of an optimum reaction coordinate as a linear or nonlinear combination of important collective variables (CVs) sampled from an ensemble of reactive transition paths for an intramolecular proton transfer reaction catalyzed by the enzyme human carbonic anhydrase (HCA) II. The linear models are optimized by likelihood maximization for a given number of CVs. The nonlinear models are based on an artificial neural network with the same number of CVs and optimized by minimizing the root-mean-square error in comparison to a training set of committor estimators generated for the given transition. The nonlinear reaction coordinate thus obtained yields the free energy of activation and rate constant as 9.46 kcal mol-1 and 1.25 × 106 s-1, respectively. These estimates are found to be in quantitative agreement with the known experimental results. We have also used an extended autoencoder model to show that a similar analysis can be carried out using a single CV only. The resultant free energies and kinetics of the reaction slightly overestimate the experimental data. The implications of these results are discussed using a detailed microkinetic scheme of the proton transfer reaction catalyzed by HCA II.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/c04a717195612e5f598cb819013bcccf5719d6d6">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "33"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div34">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Energy Decomposition along the Reaction Coordinate: Theory and Applications to Nonequilibrium Ensembles of Trajectories.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. A</h7>
                                    <p class="text-muted"> <em>Wenjin Li</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                A theoretical framework is proposed for an energy decomposition scheme along the reaction coordinate, in which the ensemble average of the potential energy weighted with reactive flux intensity is decomposed into energy components at the per-coordinate level. The decomposed energy quantity is demonstrated to be closely related to the free energy along the reaction coordinate, and its connection to the emergent potential energy is provided. In the application to alanine dipeptide under vacuum, illustrative calculations were performed in three nonequilibrium ensembles of trajectories: (1) transition path ensemble sampled with transition path sampling; (2) ensemble of short trajectories initiated from configurations around the transition-state region; and (3) ensemble of short trajectories shooting from configurations in several transition paths. The energy components on each coordinate were found to be consistent among the three ensembles of trajectories, indicating a broad applicability of the approach in biomolecular studies. In addition, the free energies along an optimized reaction coordinate obtained with these nonequilibrium ensembles were largely overlapped with a reference free energy calculated from a long equilibrium trajectory.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/5cdad09b81456aaf95040c53fdfd9cd571553e69">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "34"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div35">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Recent developments in methods for identifying reaction coordinates</strong></h4>
                                    <h7 style="color:blue;"> Molecular Simulation</h7>
                                    <p class="text-muted"> <em>Wenjin Li and Ao Ma</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                In the study of rare events in complex systems with many degrees of freedom, a key element is to identify the reaction coordinates of a given process. Over recent years, a number of methods and protocols have been developed to extract the reaction coordinates based on limited information from molecular dynamics simulations. In this review, we provide a brief survey over a number of major methods developed in the past decade, some of which are discussed in greater detail, to provide an overview of the problems that are partially solved and challenges that still remain. A particular emphasis has been placed on methods for identifying reaction coordinates that are related to the committor.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/li2014.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "35"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div36">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Computer simulations of homogeneous nucleation of benzene from the melt.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>Manas Shah and E. Santiso and B. Trout</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Nucleation is the key step in crystallization by which the molecules (or atoms or ions) aggregate together, find the right relative orientations, and start to grow to form the final crystal structure. Since nucleation is an activated step involving a large gap in time scales between molecular motions and the nucleation event itself, nucleation must be studied using rare events methods. We employ a technique developed previously in our group known as aimless shooting [Peters, B.; Trout, B. L. J. Chem. Phys., 2006, 125, 054108], which is based on transition path sampling, to generate reactive trajectories between the disordered and ordered phases of benzene. Using the likelihood maximization algorithm, we analyze the aimless shooting trajectories to identify the key order parameters or collective variables to describe the reaction coordinate for the nucleation of benzene from the melt. We find that the local bond orientation and local relative orientation order parameters are the most important collective variables in describing the reaction coordinate for homogeneous nucleation from the melt, as compared to cluster size and space-averaged order parameters. This study also demonstrates the utility of recently developed order parameters for molecular crystals [Santiso, E. E.; Trout, B. L. J. Chem. Phys., 2011, 134, 064109].
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/shah2011.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "36"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div37">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Reaction Coordinates and Mechanistic Hypothesis Tests.</strong></h4>
                                    <h7 style="color:blue;"> Annual review of physical chemistry</h7>
                                    <p class="text-muted"> <em>B. Peters</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Reaction coordinates are integral to several classic rate theories that can (a) predict kinetic trends across conditions and homologous reactions, (b) extract activation parameters with a clear physical interpretation from experimental rates, and (c) enable efficient calculations of free energy barriers and rates. New trajectory-based rare events methods can provide rates directly from dynamical trajectories without a reaction coordinate. Trajectory-based frameworks can also generate ideal (but abstract) reaction coordinates such as committors and eigenfunctions of the master equation. However, rates and mechanistic insights obtained from trajectory-based methods and abstract coordinates are not readily generalized across simulation conditions or reaction families. We discuss methods for identifying physically meaningful reaction coordinates, including committor analysis, variational transition state theory, Kramers-Langer-Berezhkovskii-Szabo theory, and statistical inference methods that can use path sampling data to screen, mix, and optimize thousands of trial coordinates. Special focus is given to likelihood maximization and inertial likelihood maximization approaches.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/peters2015.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "37"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div38">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Characterization of a dynamic string method for the construction of transition pathways in molecular reactions.</strong></h4>
                                    <h7 style="color:blue;"> The journal of physical chemistry. B</h7>
                                    <p class="text-muted"> <em>Margaret E. Johnson and G. Hummer</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                We explore the theoretical foundation of different string methods used to find dominant reaction pathways in high-dimensional configuration spaces. Pathways are assessed by the amount of reactive flux they carry and by their orientation relative to the committor function. By examining the effects of transforming between different collective coordinates that span the same underlying space, we unmask artificial coordinate dependences in strings optimized to follow the free energy gradient. In contrast, strings optimized to follow the drift vector produce reaction pathways that are significantly less sensitive to reparameterizations of the collective coordinates. The differences in these paths arise because the drift vector depends on both the free energy gradient and the diffusion tensor of the coarse collective variables. Anisotropy and position dependence of diffusion tensors arise commonly in spaces of coarse variables, whose generally slow dynamics are obtained by nonlinear projections of the strongly coupled atomic motions. We show here that transition paths constructed to account for dynamics by following the drift vector will (to a close approximation) carry the maximum reactive flux both in systems with isotropic position dependent diffusion and in systems with constant but anisotropic diffusion. We derive a simple method for calculating the committor function along paths that follow the reactive flux. Lastly, we provide guidance for the practical implementation of the dynamic string method.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="SciHub/SERB/johnson2012.pdf">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "38"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div39">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Time-lagged Flux in the Transition Path Ensemble: Flux Maximization and Relation to Transition Path Theory</strong></h4>
                                    <h7 style="color:blue;"> bioRxiv</h7>
                                    <p class="text-muted"> <em>Wenjin Li</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                Transition path ensemble is of special interest in reaction coordinate identification as it consists of reactive trajectories that start from the reactant state and end in the product one. As a theoretical framework for describing the transition path ensemble, the transition path theory has been introduced more than ten years ago and so far its applications have been only illustrated in several low-dimensional systems. Given the transition path ensemble, expressions for calculating flux, current (a vector field), and principal curve are derived here in the space of collective variables from the transition path theory and they are applicable to time-series obtained from molecular dynamics simulations of high-dimensional systems, i.e., the position coordinates as a function of time in the transition path ensemble. The connection of the transition path theory is made to a density-weighted average flux, a quantity proposed in a previous work to appraise the relevance of a coordinate to the reaction coordinate [W. Li, J. Chem. Phys. 156, 054117 (2022)]. Most importantly, as an extension of the existing quantities, time-lagged quantities such as flux and current are also proposed. The main insights and objects provided by these time-lagged quantities are illustrated in the application to the alanine peptide in vacuum.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/2eb68c28f8c64cf8c6b35275488d416457120e8c">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "39"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div40">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Information Thermodynamics of the Transition-Path Ensemble.</strong></h4>
                                    <h7 style="color:blue;"> Physical review letters</h7>
                                    <p class="text-muted"> <em>Miranda D. Louwerse and David A. Sivak</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The reaction coordinate describing a transition between reactant and product is a fundamental concept in the theory of chemical reactions. Within transition-path theory, a quantitative definition of the reaction coordinate is found in the committor, which is the probability that a trajectory initiated from a given microstate first reaches the product before the reactant. Here we develop an information-theoretic origin for the committor and show how selecting transition paths from a long ergodic equilibrium trajectory induces entropy production which exactly equals the information that system dynamics provide about the reactivity of trajectories. This equality of entropy production and dynamical information generation also holds at the level of arbitrary individual coordinates, providing parallel measures of the coordinate's relevance to the reaction, each of which is maximized by the committor.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/f064a55030acb244299480c56f5456e14370a075">&nbsp;
                                </a>
                                <?php if($_SESSION['username'] == "dmcoder") // If session is not set then redirect to Login Page
                        
                {echo '<a class="slide1 btn text-center"  href="javascript:void(0)" id="button" data-id = "40"></a>';}?>
        
                            </div>
                        </div>
                    </div>                <div class="card col-12">
                        <div class="card-wrapper" id="update-div41">
                            <div class="top-line row">
                                <div class="col">
                                    <h4 class="card-title mbr-fonts-style display-5"><strong>Optimizing reaction coordinate by flux maximization in the transition path ensemble.</strong></h4>
                                    <h7 style="color:blue;"> The Journal of chemical physics</h7>
                                    <p class="text-muted"> <em>Wenjin Li</em></p>
                                </div>
                            </div>
                            <hr class="hr5">
                            <div class="bottom-line">
                                <p class="ff3">
                                The transition path ensemble is a collection of reactive trajectories, all of which largely keep going forward along the transition channel from the reactant state to the product one, and is believed to possess the information necessary for the identification of reaction coordinates. Previously, the full coordinates (both position and momentum) of the snapshots in the transition path ensemble were utilized to obtain the reaction coordinate [W. Li and A. Ma, J. Chem. Phys. 144, 114103 (2016) and W. Li, J. Chem. Phys. 148, 084105 (2018)]. Here, with the conformational (or position) coordinates alone, it is suggested that a meaningful one-dimensional representation of the reaction coordinate can be obtained by maximizing the flux (the net number of transitions through the dividing surface) of a given coordinate in the transition path ensemble. In the application to alanine dipeptide in vacuum, dihedral angles ϕ and θ were identified to be the two best reaction coordinates, which was consistent with the results in the existing studies. A linear combination of these two coordinates gave a better reaction coordinate, which is highly correlated with the committor. Most importantly, the method obtained a linear combination of pairwise distances between heavy atoms, which was highly correlated with the committor as well. The standard deviation of the committor at the transition region defined by the optimized reaction coordinate is as small as 0.08. In addition, the effects of practical factors, such as the choice of transition path sub-ensembles and saving interval between frames in transition paths, on reaction coordinate optimization were also considered.
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" target="_blank" href="https://www.semanticscholar.org/paper/a3765aa73d5c61454cc73831299039bf1fc17547">&nbsp;
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