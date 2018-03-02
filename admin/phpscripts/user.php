<?php
    function createUser($fname, $username, $email, $login_num, $lvllist) {
      include('connect.php');
      $generatePas = genPassword(8);
      // $hashPas = hashPassword();

      // chamar funcao de cripto - quando eu defino quem vai ser criptografado
      $userstring = "INSERT INTO tbl_user (user_fname, user_name, user_pass, user_email, user_login,
        user_date, user_ip, user_level) VALUES ('${fname}', '${username}',
        '${generatePas}', '${email}', '${login_num}', NOW(), 'no', '${lvllist}')";

        // echo $userstring;
        $userquery = mysqli_query($link, $userstring);
        if($userquery) {
          $sendMail = submitMessage($fname, $username, $generatePas, $email);
          redirect_to('admin_index.php');
        } else {
          $message = "User error";
          return $message;

        }
        mysqli_close($link);
    }

    function editUser($id, $fname, $username, $password, $email) {
      include('connect.php');
      $updatestring = "UPDATE tbl_user SET user_fname = '{$fname}', user_name = '{$name}',
      user_pass = '{$password}', user_email = '{$email}' WHERE user_id = {$id}";
      // echo $updatestring;
      $updatequery = mysqli_query($link, $updatestring);

      if($updatequery) {
        redirect_to("admin_index.php");
      } else {
        $message = "Didn't work!";
        return $message;
      }

      mysqli_close($link);
    }

    function deleteUser($id) {
      include('connect.php');
      $delstring = "DELETE FROM tbl_user WHERE user_id = {$id}";
      $delquery = mysqli_query($link, $delstring);
      if($delquery) {
        redirect_to("../admin_index.php");
      }else{
        $message ="Sad";
        return $message;
      }

    mysqli_close($link);
    }

 ?>
