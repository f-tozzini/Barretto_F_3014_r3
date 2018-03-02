<?php
  require_once('phpscripts/config.php');
  // confirm_logged_in();

  $id = $_SESSION['user_id'];
  $tbl = "tbl_user";
  $col = "user_id";
  $popForm = getSingle($tbl, $col, $id);
  // echo $popForm;
  $info = mysqli_fetch_array($popForm);
  echo $info;

  if(isset($_POST['submit'])){
    $fname = trim($_POST['fname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $result = editUser($fname, $username, $password, $email);
    $message = $result;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/main.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <title>Edit User</title>
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
</head>
<body>
  <h2>Edit User</h2>
  <?php if(!empty($message)) { echo $message;} ?>

  <div id="user-container">
  <form action="admin_edituser.php" method="post"> <!-- always change the action when duplicating pages -->
    <label>First Name</label>
    <input type="text" name="fname" value="<?php echo $info['user_name']; ?>">
    <label>Username</label>
    <input type="text" name="username" value="<?php echo $info['user_name']; ?>">
    <label>Password</label>
    <input type="text" name="password" value="<?php echo $info['user_pass']; ?>">
    <label class="email">Email</label>
    <input type="text" name="email" value="<?php echo $info['user_email']; ?>">

      <br><br>
      <input type="submit" name="submit" value="SAVE" class="button">

  </form>
</div>

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


</body>
</html>
