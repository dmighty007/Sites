<?php session_start();
    require 'included/dbh.inc.php';
    
    define('TITLE',"Forum");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    if (isset($_GET['topic']))
    {
        $topic = $_GET['topic'];
    }
    else
    {
        header("Location: index.php");
        exit();
    }
    
    include 'included/HTML-head.php';
?> 

        <link href="css/forum-styles.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@multiavatar/multiavatar/multiavatar.min.js"></script>
    </head>
    
<body>

<?php

    include 'included/navbar.php';

    if (isset($_POST['submit-reply']))
    {
        $content = $_POST['reply-content'];
        
        if (!empty($content))
        {
            $sql = "insert into posts(post_content, post_date, post_topic, post_by) "
                    . "values (?,now(),?,?)";
            $stmt = mysqli_stmt_init($conn);
            
            if (!mysqli_stmt_prepare($stmt, $sql))
            {
                die('sql error');
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "sss", $content, $topic, $_SESSION['userId']);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
            }
        }
    }
    
    
    $sql = "select * from topics, categories where topic_id=? "
            . "and topic_cat = cat_id";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        die('sql error');
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $topic);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if (!($forum = mysqli_fetch_assoc($result)))
        {
            die('sql error');
        }
    }

?>
    
    
    <br><Br>
    <div class="container">
    <div class="col-sm-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="topics.php">Forums</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo ucwords($forum['cat_name']); ?></a></li>
            </ol>
        </nav>
        <div class="card post-header text-center">
            <h1><?php echo ucwords($forum['topic_subject']); ?></h1>
        </div>
    </div>


    <div class="col-sm-12">
        
            
            
            <?php
            
                $sql = "select * from posts p, users u "
                        . "where p.post_topic=? "
                        . "and p.post_by=u.idUsers "
                        . "order by p.post_id;";
                $stmt = mysqli_stmt_init($conn);    

                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    die('sql error');
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $topic);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result))
                    {

                        $voted_u = false;
                        $voted_d = false;

                        $sql = "select votePost, voteBy, vote from postvotes "
                            . "where votePost=? "
                            . "and voteBy=? "
                            . "and vote=1";

                        $stmt = mysqli_stmt_init($conn);

                        if (!mysqli_stmt_prepare($stmt, $sql))
                        {
                            die('sql error');
                        }
                        else
                        {
                            mysqli_stmt_bind_param($stmt, "ss", $row['post_id'], $_SESSION['userId']);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_store_result($stmt);

                            $resultCheck = mysqli_stmt_num_rows($stmt);

                            if ($resultCheck == 0)
                            {
                                $voted_u = true;
                            }
                        }

                        $sql = "select votePost, voteBy, vote from postvotes "
                            . "where votePost=? "
                            . "and voteBy=? "
                            . "and vote=-1";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql))
                        {
                            die('sql error');
                        }
                        else
                        {
                            mysqli_stmt_bind_param($stmt, "ss", $row['post_id'], $_SESSION['userId']);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_store_result($stmt);

                            $resultCheck = mysqli_stmt_num_rows($stmt);

                            if ($resultCheck == 0)
                            {
                                $voted_d = true;
                            }
                        }
                        
                        echo '
                            
                        <div class="container mt-100">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <div class="media flex-wrap w-100 align-items-center"> 
                                        <img class="pfimage d-block ui-w-40 rounded-circle" alt=""  id='.$row['f_name'].' width=5%;>
                                        
                                            <div class="media-body ml-3"> <a href="javascript:void(0)" data-abc="true" class="text-success">'.$row['uidUsers'].'</a>
                                                <div class="text-muted small">'.date("F jS, Y", strtotime($row['post_date'])).' </div>
                                            </div>
                                            <div class="text-muted small ml-3">
                                            <span><span class="span-post-no">#'.$i.'</span> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                    <p>'.$row['post_content'].'</p>
                                    </div>
                                    <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-3 pt-0 pb-0" >
                                        <div class="px-10 pt-0 pb-0">' ;
                                        if ($voted_u)
                                        {
                                            echo "<a href='included/post-vote.inc.php?topic=".$topic."&post=".$row['post_id']."&vote=1' >";
                                            echo '<i class="fa fa-thumbs-up fa-1x text-success" aria-hidden="true"></i></a>';
                                        }
                                        else {

                                            echo '<i class="fa fa-thumbs-up fa-1x" aria-hidden="true"></i>';
                                        }
                                        echo '
                                        <i style="padding-left:5px;" class="fa fa-heart text-danger fa-1x"></i>&nbsp;<span style="padding-right:5px;">' .$row['post_votes'].' </span>';
                                        if ($voted_d)
                                        {
                                            echo "<a href='included/post-vote.inc.php?topic=".$topic."&post=".$row['post_id']."&vote=-1' >";
                                            echo '<i class="fa fa-thumbs-down text-info fa-1x " aria-hidden="true"></i></a>';
                                        }
                                        else {

                                            echo '<i class="fa fa-thumbs-down fa-1x" aria-hidden="true"></i>';
                                        }


                                           echo ' 
                                        </div>
                                        <div class="px-4 pt-0 pb-0">';

                                        if ( ($row['post_by']==$_SESSION['userId']) || ($_SESSION['userLevel'] == 1))
                                            {
                                                echo '<a  href="included/delete-post.php?topic='.$topic.'&post='.$row['post_id'].'&by='.$row['post_by'].'" >'
                                                    . '<i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>';
                                            }   
                                        echo '                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>';

                                            
                        $i++;
                    }
                }
            
            ?>
            
        
    </div>
    
    
    <div class="col-sm-12">
        <form method="post" action="">
            <fieldset>
                <div class="form-group">
                    <textarea name="reply-content" class="form-control" id="reply-form" rows="7" onblur="checkWords()"></textarea>
                </div>
                <input type="submit" value="Submit reply" id="submit" class="btn btn-lg btn-dark" name="submit-reply">
            </fieldset>
        </form>
    </div>
</div>


<script>     
            function getById(id) {
                return document.getElementById(id);
            }
            var l = document.getElementsByClassName("pfimage").length;
            var cl = document.getElementsByClassName("pfimage")
            for (let i = 0; i < cl.length; i++) {
                idnew = cl[i].id;
                //img.src = "data:image/svg+xml;charset=utf-8,"+xml;
                var xml = multiavatar(idnew);
                document.getElementsByClassName("pfimage")[i].src = "data:image/svg+xml;base64,"+btoa(xml);
                
                //document.getElementsByClassName("pfimage")[i].firstChild.setAttribute("transform", "scale(0.5)"); 
                //document.getElementsByClassName("pfimage")[i].firstChild.setAttribute('transform','translate(25,0)');
                //document.getElementsByClassName("pfimage")[i].firstChild.setAttribute("viewBox", "0 0 400 400"); 
                //document.getElementsByClassName("pfimage")[i].firstChild.setAttribute("style", "padding-top:0px;"); 
                //getById(idnew).innerHTML = multiavatar(idnew);
                }  
            
        </script>

    
    <script>
      function checkWords() {
        var my_textarea = document.getElementById('reply-form').value;
        var pattern = /fuck|amitava|sunandan|suman|punya|brata|punyabrata|lahiri|sakuntala|urna|basu|nibedita|chandrakona|nivedita|nico/ig;
        
        if (my_textarea.match(pattern)) {
          //alert("Hey no bad words here!");
          my_textarea = my_textarea.replace(pattern, "****" );
          document.getElementById('reply-form').value = my_textarea;
        }
        
      }
    </script>
    <?php include 'included/footer.php'; ?>
    
    
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" ></script>
    </body>
</html>