<?php
    require "foodconnet.php";

    require "../modules/foodsession.php";

    if(!isset($_POST['login'])){
        redirect("../food.php");
    }else{
        $email = $_POST['mail'];
        $password = $_POST['pass'];
        $sql = "SELECT * FROM customers WHERE  email = ? ";
        $stmt = mysqli_stmt_init($dbconnect);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"s",$email);
        $execute = mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
           $returnedPassword = $row['user_password'];
           if (password_verify($password,$returnedPassword)) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['success_msg'] = "Welcome ".$row['firstname'];
                redirect("../dashboardfood.php");
           }else{
            $_SESSION['error_msg']= "Incorrect password";
             redirect("../loginfood.php");
           }
        }else{
            $_SESSION['error_msg']= "This email or username does not exist";
             redirect("../loginfood.php");
        }

    }

