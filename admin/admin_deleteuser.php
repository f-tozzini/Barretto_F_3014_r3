<?php
  require_once('phpscripts/config.php');
  // confirm_logged_in();
  $tbl = "tbl_user";
  $users = getAll($tbl);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/main.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <title>Delete user</title>
</head>
<body>
  <img src="images/header.jpg" alt="header image" id="header-img">
  <div id="admin-container">
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>


    <h2>Time to delete!</h2>
    <div id="delete-users">
      <?php
        while($row = mysqli_fetch_array($users)){
          echo "{$row['user_name']} <a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Delete! </a><br>";
        }
       ?>
     </div>
  <br>  <br>  <br>
    <a href="admin_createuser.php" class="admin-button">create user</a>
    <a href="admin_edituser.php" class="admin-button">Edit User</a>
    <a href="admin_deleteuser.php" class="admin-button">Delete User</a>
    <a href="phpscripts/caller.php?caller_id=logout" class="admin-button">Sign Out</a>
  <br>  <br>  <br>


  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
  <i class="far fa-star"></i>
</div>
<img src="images/footer.jpg" alt="footer image" id="footer-img">
</body>
</html>
