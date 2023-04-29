<?php session_start();

    $serverName = "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "register";

    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName, 3306);

    if (!$conn)
    {
        die("Connection failed: ". mysqli_connect_error());
    }


    
    
    $artStat = $_POST['id'];
    
    if (empty($artStat))
    {
        header("Location: ../create-category.php?error=emptyfields");
        exit();
    }
    else
    {
        // checking if a category already exists with the given name
        $sql = "select art_status from articles where art_id=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../update_stat.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $artStat);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            
            $resultCheck = mysqli_stmt_num_rows($stmt);
            
            if ($resultCheck > 0)
            {
                header("Location: ../create-category.php?error=catnametaken");
                exit();
            }
            else
            {  
                $sql = "insert into articles(art_status) "
                        . "values (?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../create-category.php?error=sqlerror");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $artStat);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    
                    header("Location: ../vae.php?id="+.$artStat);
                    exit();
                }
            }
        }
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
