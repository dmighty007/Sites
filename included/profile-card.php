<div class='card card-profile text-center' style="height:200px">
    <img alt='' class='card-img-top card-user-cover' src='img/user-cover.png'>
    <div class="text-center" style="width:100%; display: flex; justify-content:center;align-items:center;">
        <div class="profile-img" style="width:60%;" >
            <a href='profile.php'>
            <?php  
                if ($_SESSION['userLevel'] == 1)
                {
                    echo '<div class="card-admin-badge" >
                    <img id="card-admin-badge" src="img/admin-badge.png" align="right" style="position: relative;z-index: 10;">
                </div>
                    ';
                        }
            ?>
            
                <div class="pcard_img" id=<?php echo ucwords($_SESSION['f_name'] ); ?> ></div>
                
            </a>
            
        </div>
    </div>
    <a href="edit-profile.php">
        <i class="fa fa-pencil fa-2x edit-profile" aria-hidden="true"></i>
    </a>
    <h5 class='card-title'>
        <?php echo ucwords($_SESSION['userUid']); ?>
    </h5>
</div>
