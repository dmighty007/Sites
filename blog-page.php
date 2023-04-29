<?php session_start();
    require 'included/dbh.inc.php';
    
    define('TITLE',"Blog");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    if(isset($_GET['id']))
    {
        $blogId = $_GET['id'];
    }
    else
    {
        header("Location: index.php");
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
            <!--
          <div class="col-sm-3">
            
              <?php include 'included/profile-card.php'; ?>
              
          </div>-->
            
            
          <div class="col-sm-12" id="user-section">
              
                <?php

                    $sql = "select * from blogs, users 
                            where blog_id = ? 
                            and blogs.blog_by = users.idUsers";

                    $stmt = mysqli_stmt_init($conn);    

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        die('SQL error');
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $blogId);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        $row = mysqli_fetch_assoc($result);
                    }
                ?>
              
              <img class="blog-cover" src="uploads/<?php echo $row['blog_img']; ?>">
              
              <div class="blog-author">
              <a href="profile.php?id=<?php echo ucwords($row['idUsers']) ?>">
              <div class="blg_auth_img" id=<?php echo ucwords($row['f_name']) ?> ></div>
              </div>
              </a>
              <div class="px-5">
                  
                  <br><br><br>
                  <h1><?php echo ucwords($row['blog_title']) ?></h1>
                  <br><br><br>
                  
                  <p class="text-justify"><?php echo $row['blog_content'] ?></p>
                  
                  <div class="blog-likes pr-1 pt-5">
                      
                      <h3>
                            <a href="included/blog-vote.inc.php?blog=<?php echo $row['blog_id']; ?>" >
                                <i class="fa fa-thumbs-up fa-2x" aria-hidden="true"></i>
                            </a>  
                            <?php echo $row['blog_votes']; ?>
                      </h3>
                      <br>
                      <p class="text-muted">Author: <?php echo ucwords($row['uidUsers']); ?></p>
                  </div>
                  
              </div>
              
              
              
          </div>
            
        </div>


      </div> <!-- /container -->


<?php include 'included/footer.php'; ?>

<script>     
            function getById(id) {
                return document.getElementById(id);
            }
            var cl = document.getElementsByClassName('blg_auth_img');
            var idnew = cl[0].id;
            
            getById(idnew).innerHTML = multiavatar(idnew);
            //getById("aaa2").innerHTML = multiavatar(<?php echo ucwords($user['f_name']);?>);
        </script>

<?php include 'included/HTML-footer.php'; ?>