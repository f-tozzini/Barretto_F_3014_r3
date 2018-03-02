<?php
  function countLogin(){
    $login_num = count(logIn($username, $password, $ip));
    return $login_num;

    // if logIn($username, $password, $ip) == true
    // $login_num = ($_SESSION['user_login'] + 1;
  }


//What I'm trying to do = I added a new field to a database to count the login attempts.
//When you create the user, it counts as 1, and add 1 each time the user logs in.
//If the user_login field = 1, it would redirect to the "edit user page". Otherwise, it would redirect
//the user to index.

  function redirectTo(){
    require_once('connect.php');

    session_start();
    if (isset($_SESSION['user_login']))
    {
       $_SESSION['user_login']++;
       if ($_SESSION['user_login'] = 1)
       {
         redirect_to("admin_edituser.php");
       }
    } else {
       $_SESSION['user_login'] > 1;
       {
         redirect_to("admin_index.php");
       }
    }
  }
 ?>
