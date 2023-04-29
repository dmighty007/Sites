<?php session_start();
    require 'included/dbh.inc.php';
    
    define('TITLE',"Edit Profile");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'included/HTML-head.php';  
?> 
<script src="https://cdn.jsdelivr.net/npm/@multiavatar/multiavatar/multiavatar.min.js"></script>
</head>
<body>

    <?php include 'included/navbar.php'; ?>
      <div class="container">
        <div class="row">
            <div class="col-sm-3">
            
                <?php include 'included/profile-card.php'; ?>
                
            </div>
        <div class="col-sm-8 text-center" id="user-section">
              
              <img class="cover-img" id='blah-cover' src="img/user-cover.png">
              
              <form action="included/profileUpdate.inc.php" method='post' enctype="multipart/form-data"
                    style="padding: 0 30px 0 30px;">
                    
            
                    <div class="text-center" style="width:100%; display: flex; justify-content:center;align-items:center;">
                    <div class="profile-img" style="width:20%;" id="blah"  src="#">
                    <div id='aaa2'></div>
                    <br>
                    <button class="btn btn-success btn-block btn-sm gradient-custom-4 text-body">change <i class="fa fa-refresh"></i></button>
                    </div>
                    </div>

                    <?php  
                          if ($_SESSION['userLevel'] === 1)
                          {
                              echo '<img id="admin-badge" src="img/admin-badge.png">';
                          }
                    ?>
                  <br><br><br><br>
                    <h2><?php echo strtoupper($_SESSION['userUid']); ?></h2>
                    <br>
                
                    <div class="form-row" style="display:none;" >
                      <div class="col">
                        <input type="text" class="form-control" name="f-name" placeholder="First Name"
                               value="<?php echo $_SESSION['f_name'] ?>" >
                        <small id="emailHelp" class="form-text text-muted">First Name</small>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" name="l-name" placeholder="Last Name" 
                               value="<?php echo $_SESSION['l_name'] ?>" >
                        <small id="emailHelp" class="form-text text-muted">Last Name</small>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="email" 
                               value="<?php echo $_SESSION['emailUsers'] ?>" >
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
              
                    <div class="form-group" style="display:none">
                                <label >Gender</label><br>
                                <input id="toggle-on" class="toggle toggle-left" name="gender" value="m" type="radio" 
                                    <?php 
                                        if ($_SESSION['gender'] == 'm'){ ?> 
                                            checked="checked"
                                    <?php } ?>>
                                <label for="toggle-on" class="btn-r">M</label>
                                <input id="toggle-off" class="toggle toggle-right" name="gender" value="f" type="radio"
                                    <?php if ($_SESSION['gender'] == 'f'){ ?> 
                                            checked="checked"
                                    <?php } ?>>
                                <label for="toggle-off" class="btn-r">F</label>
                    </div>
                  
                  <hr>
                  
                    <div class="form-group" style="display:none">
                        <label for="headline">Profile Headline</label>
                        <input class="form-control" type="text" id="headline" name="headline" 
                               placeholder="Your Profile Headline" value='<?php echo $_SESSION['headline']; ?>'><br>
                        
                        <label for="edit-bio">Profile Bio</label>
                        <textarea class="form-control" id="edit-bio" rows="10" name="bio" maxlength="5000"
                            placeholder="What you want to tell people about yourself" 
                            ><?php echo $_SESSION['bio']; ?></textarea>
                    </div>
                  
                  <hr>
                  
                  <div class="form-group">
                        <label for="old-pwd">Change Password</label>
                        <input type="password" class="form-control" id="old-pwd" name="old-pwd"
                               placeholder="Current Password">
                    </div>
                  
                    <div class="form-row">
                      <div class="col">
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pwd"
                               placeholder="New Password">
                      </div>
                      <div class="col">
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pwd-repeat"
                               placeholder="Repeat New Password">
                      </div>
                    </div>
                  
                  <br><input type="submit" class="btn btn-primary" name="update-profile" value="Update Profile">
                  
              </form>
              
              
          </div>
          <div class="col-sm-1">
            
          </div>
        </div>


      </div> <!-- /container -->


<?php include 'included/footer.php'; ?>

                            

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
        
                            <script>
                                var dp = '<?php echo $_SESSION["userImg"]; ?>';
                                
                                $('#blah').attr('src', 'uploads/'+ dp);
                                
                                function readURL(input) {

                                    if (input.files && input.files[0]) {
                                      var reader = new FileReader();

                                      reader.onload = function(e) {
                                        $('#blah').attr('src', e.target.result);
                                        
                                      }

                                      reader.readAsDataURL(input.files[0]);
                                    }
                                  }

                                  $("#imgInp").change(function() {
                                    readURL(this);
                                  });
                                  
                                  
                            </script>
        <script>     
            function getById(id) {
                return document.getElementById(id);
            }
            var cl=document.getElementsByClassName('pcard_img') ;
            var idnew=cl[0].id ;
            getById(idnew).innerHTML = multiavatar(idnew);
            //getById("a1").innerHTML = multiavatar(<?php echo ucwords($user['f_name']);?>);
            getById("aaa2").innerHTML =  multiavatar(idnew);
        </script>
        
    </body>
</html>