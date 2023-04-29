<?php session_start();
    require 'included/dbh.inc.php';
    
    define('TITLE',"Profile");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    if(isset($_GET['id']))
    {
        $userid = $_GET['id'];
    }
    else
    {
        $userid = $_SESSION['userId'];
    }
    
    $sql = "select * from users where idUsers = ".$userid;
    $stmt = mysqli_stmt_init($conn);    
    
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        die('SQL error');
    }
    else
    {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);
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
              <img class="cover-img" src="img/user-cover.png">
                <div class="text-center" style="width:100%; display: flex; justify-content:center;align-items:center;">
                    <div class="profile-img"  style="width:20%;" >
                        <div class="main_profile_image" id="<?php echo ucwords($user['f_name']);?>" ></div>
                    </div>
                <div>
              
                <?php  
                        if ($user['userLevel'] === 1)
                        {
                         echo '<img id="admin-badge" src="img/admin-badge.png">';
                        }
                ?>
          </div>


        </div>
              <br><br>
              <h2><?php echo ucwords($user['uidUsers']); ?></h2>
              <?php
                $email_id = $user["emailUsers"];
                if ($_SESSION['userId'] == $user['idUsers'])
                {   
                //echo "Hi";
                    echo "<h6><small class='text-muted'>".$email_id."</small><h6>";
                }
               ?>
              <br><small><?php echo $user['headline']; ?></small>
              <br><br>
              <div class="profile-bio">
                  <small><?php echo $user['bio'];?></small>
              </div>
              
              
              <hr>
              <h3>Created Blogs</h3>
              <br><br>
              
              <?php
                    $sql = "select * from blogs "
                            . "where blog_by = ?";
                    $stmt = mysqli_stmt_init($conn);    

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        die('SQL error');
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $userid);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        
                        echo '<div class="container">'
                                    .'<div class="row">';
                        
                        $row = mysqli_fetch_assoc($result);
                        if(empty($row))
                        {
                            echo '<div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                <div class="col-sm-4">
                                    <img class="profile-empty-img" src="img/empty.png">
                                  </div>
                                  <div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                    </div>
                                  </div>';
                        }
                        else
                        {
                            do
                            {       
                                    echo '<div class="col-sm-4" style="padding-bottom: 30px;">
                                        <div class="card user-blogs">
                                            <a href="blog-page.php?id='.$row['blog_id'].'">
                                            <div id="aaa2" class="avatar"></div>
                                            <!--
                                            <img class="card-img-top" src="uploads/'.$row['blog_img'].'" alt="Card image cap">-->
                                            <div class="card-block p-2">
                                              <p class="card-title">'.ucwords($row['blog_title']).'</p>
                                             <p class="card-text"><small class="text-muted">'
                                             .date("F jS, Y", strtotime($row['blog_date'])).'</small></p>
                                            </div>
                                            </a>
                                          </div>
                                          </div>';
                            }while ($row = mysqli_fetch_assoc($result));
                            echo '</div>'
                                    .'</div>';
                        }
                    }
              ?>
              
              <br><br>
              <hr>
              <h3>Created Forums</h3>
              <br><br>
              
              <?php
                    $sql = "select * from topics where topic_by = ?";
                    $stmt = mysqli_stmt_init($conn);    

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        die('SQL error');
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $userid);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        
                        echo '<div class="container">'
                                    .'<div class="row">';
                        
                        $row = mysqli_fetch_assoc($result);
                        if(empty($row))
                        {
                            echo '<div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                <div class="col-sm-4">
                                    <img class="profile-empty-img" src="img/empty.png">
                                  </div>
                                  <div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                    </div>
                                  </div>';
                        }
                        else
                        {
                            do
                            {
                                echo '<div class="col-sm-4" style="padding-bottom: 30px;">
                                        <div class="card user-blogs">
                                            <a href="posts.php?topic='.$row['topic_id'].'">
                                            <img class="card-img-top" src="img/forum-cover.png" alt="Card image cap">
                                            <div class="card-block p-2">
                                              <p class="card-title">'.ucwords($row['topic_subject']).'</p>
                                             <p class="card-text"><small class="text-muted">'
                                             .date("F jS, Y", strtotime($row['topic_date'])).'</small></p>
                                            </div>
                                            </a>
                                          </div>
                                          </div>';
                            }while ($row = mysqli_fetch_assoc($result));
                            echo '</div>'
                                    .'</div>';
                        }
                    }
              ?>
              
              <br><br>
              <hr>
              <h3>Participated Polls</h3>
              <br><br>
              
              
              <?php
                    $sql = "select * from poll_votes v "
                            . "join polls p on v.poll_id = p.id "
                            . "join users u on p.created_by = u.idUsers "
                            . "where v.vote_by = ?";
                    $stmt = mysqli_stmt_init($conn);    

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        die('SQL error');
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $userid);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        
                        echo '<div class="container">'
                                    .'<div class="row">';
                        
                        $row = mysqli_fetch_assoc($result);
                        if(empty($row))
                        {
                            echo '<div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                <div class="col-sm-4">
                                    <img class="profile-empty-img" src="img/empty.png">
                                  </div>
                                  <div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                    </div>
                                  </div>';
                        }
                        else
                        {
                            do
                            {   
                                echo '<div class="col-sm-4" style="padding-bottom: 30px;">
                                        <div class="card user-blogs">
                                            <a href="poll.php?poll='.$row['poll_id'].'">
                                            <img class="card-img-top" src="img/poll-cover.png" alt="Card image cap">
                                            <div class="card-block p-2">
                                              <p class="card-title">'.ucwords($row['subject']).'</p>
                                             <p class="card-text"><small class="text-muted">'
                                             .date("F jS, Y", strtotime($row['created'])).'</small></p>
                                            </div>
                                            </a>
                                          </div>
                                          </div>';
                            }while ($row = mysqli_fetch_assoc($result));
                            echo '</div>'
                                    .'</div>';
                        }
                    }
              ?>
              
              
              <br><br>
              
              
              
          </div>
          <div class="col-sm-1">
            
          </div>
        </div>


      </div> <!-- /container -->

      <script>     
            function getById(id) {
                return document.getElementById(id);
            }
            var cl=document.getElementsByClassName('pcard_img') ;
            var idnew=cl[0].id ;

            //getById(idnew).innerHTML = multiavatar(idnew);
            document.getElementsByClassName("pcard_img")[0].innerHTML = multiavatar(idnew);
            //getById("a1").innerHTML = multiavatar(<?php echo ucwords($user['f_name']);?>);
            var cl2 = document.getElementsByClassName("main_profile_image");
            idnew2 = cl2[0].id; 
            //console.log(idnew2);
            document.getElementsByClassName("main_profile_image")[0].innerHTML = multiavatar(idnew2);
            //getById(idnew2).innerHTML =  
        </script>
<?php include 'included/footer.php'; ?>




<?php include 'included/HTML-footer.php'; ?>