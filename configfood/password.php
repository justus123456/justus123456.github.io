<?php
    require "foodconnet.php";
    require "../modules/foodsession.php";
    $currentUser = $_SESSION['id'];


    if (!isset($_POST['resetPassword'])) {
       redirect("logoutfood.php");
    }else{
        $old = $_POST['old'];
        $new = $_POST['new'];
        $confirm = $_POST['con'];

        $sql = "SELECT user_password FROM customers WHERE id = '$currentUser'";
        $query = mysqli_query($dbconnect,$sql);
        $row = mysqli_fetch_assoc($query);

       if (!password_verify($old,$row['user_password'])) {
         $_SESSION['error_msg'] = "Incorrect old password";
         redirect('../settingsfood.php');
       }
       elseif($new !== $confirm){
        $_SESSION['error_msg'] = "Passwords do not match";
        redirect('../settingsfood.php');
       }else{
        $new = password_hash($new, PASSWORD_DEFAULT);  
        $sql = "UPDATE customers SET user_password = '$new'  WHERE id = '$currentUser'";
            $query = mysqli_query($dbconnect,$sql);
            if ($query) {
               $_SESSION['success_msg'] = "Password reset was successful";
               redirect('../settingsfood.php');
            }else{
                $_SESSION['error_msg'] = "Password reset failed";
                redirect('../settingsfood.php');
            }
       }
    }