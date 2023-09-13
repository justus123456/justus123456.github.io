<?php
    require "foodconnet.php";
    require "../modules/foodsession.php";
    $currentUser = $_SESSION['id'];
    if (!isset($_POST['userUpdate'])) {
       redirect("logoutfood.php");
    }else{
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];

        //The empty function checks if the input field has been filled
        if (!empty($firstName)) {
            $sql = "UPDATE customers SET firstname = '$firstName'  WHERE id = '$currentUser'";
            $query = mysqli_query($dbconnect,$sql);
            if ($query) {
               $_SESSION['success_msg'] = "Update Successfull";
               redirect('../settingsfood.php');
            }else{
                $_SESSION['error_msg'] = "Update Failed";
                redirect('../settingsfood.php');
            }
        }else{
            redirect('../settingsfood.php');
        }

        if (!empty($lastName)) {
            $sql = "UPDATE customers SET lastname = '$lastName'  WHERE id = '$currentUser'";
            $query = mysqli_query($dbconnect,$sql);
            if ($query) {
               $_SESSION['success_msg'] = "Update Successfull";
               redirect('../settingsfood.php');
            }else{
                $_SESSION['error_msg'] = "Update Failed";
                redirect('../settingsfood.php');
            }
        }else{
            redirect('../settingsfood.php');
        }
      
        if (!empty($phone)) {
            $sql = "UPDATE customers SET phone = '$phone'  WHERE id = '$currentUser'";
            $query = mysqli_query($dbconnect,$sql);
            if ($query) {
               $_SESSION['success_msg'] = "Update Successfull";
               redirect('../settingsfood.php');
            }else{
                $_SESSION['error_msg'] = "Update Failed";
                redirect('../settingsfood.php');
            }
        }else{
            redirect('../settingsfood.php');
        }

        if (!empty($dob)) {
            $sql = "UPDATE customers SET dob = '$dob'  WHERE id = '$currentUser'";
            $query = mysqli_query($dbconnect,$sql);
            if ($query) {
               $_SESSION['success_msg'] = "Update Successfull";
               redirect('../settingsfood.php');
            }else{
                $_SESSION['error_msg'] = "Update Failed";
                redirect('../settingsfood.php');
            }
        }else{
            redirect('../settingsfood.php');
        }
    }