<?php

require "foodconnet.php";
require "../modules/foodsession.php";





if (!isset($_POST['low'])) {
    // redirect("../dashboardfood.php");
} else {

    $nam = 'pasta yum';
    $pri = '$13';
    $stat = 'ordered';
    $date = date("Y-m-d h:i:s");

    $go = "INSERT INTO foodorder(username,price,food_status,date_created) VALUES(?,?,?,?)";

    $stmp = mysqli_stmt_init($dbconnect);

    mysqli_stmt_prepare($stmp, $go);

    mysqli_stmt_bind_param($stmp, "ssss", $nam, $pri, $stat, $date);

    $exe = mysqli_stmt_execute($stmp);
    if ($exe) {
        $_SESSION['success_msg'] = "order has been taken";
        redirect("../pay.php");
    } else {
        $_SESSION['error_msg'] = "Something went wrong";
        redirect("../dashboardfood.php");
    }
}

if (!isset($_POST['pro2'])) {
    // redirect("../dashboardfood.php");
} else {

    $cam = 'crispy chicken';
    $hri = '$29.9';
    $cat = 'ordered';
    $date = date("Y-m-d h:i:s");

    $do = "INSERT INTO foodorder(username,price,food_status,date_created) VALUES(?,?,?,?)";

    $stmt = mysqli_stmt_init($dbconnect);

    mysqli_stmt_prepare($stmt, $do);

    mysqli_stmt_bind_param($stmt, "ssss", $cam, $hri, $cat, $date);

    $execute = mysqli_stmt_execute($stmt);
    if ($execute) {
        $_SESSION['success_msg'] = "order has been taken";
        redirect("../pay.php");
    } else {
        $_SESSION['error_msg'] = "Something went wrong";
       redirect("../dashboardfood.php");
    }
}

if (!isset($_POST['pro3'])) {
    // redirect("../dashboardfood.php");
} else {

    $jam = 'spaghetti shrimps';
    $ski = '$100';
    $jat = 'ordered';
    $date = date("Y-m-d h:i:s");

    $mo = "INSERT INTO foodorder(username,price,food_status,date_created) VALUES(?,?,?,?)";

    $stmt = mysqli_stmt_init($dbconnect);

    mysqli_stmt_prepare($stmt, $mo);

    mysqli_stmt_bind_param($stmt, "ssss", $jam, $ski, $jat, $date);

    $execute = mysqli_stmt_execute($stmt);
    if ($execute) {
        $_SESSION['success_msg'] = "order has been taken";
        redirect("../pay.php");
    } else {
        $_SESSION['error_msg'] = "Something went wrong";
        redirect("../dashboardfood.php");
    }
}

if (!isset($_POST['pro4'])) {
    // redirect("../dashboardfood.php");
} else {

    $vam = 'vanilla cake';
    $dip = '$100';
    $qat = 'ordered';
    $date = date("Y-m-d h:i:s");

    $jo = "INSERT INTO foodorder(username,price,food_status,date_created) VALUES(?,?,?,?)";

    $stmt = mysqli_stmt_init($dbconnect);

    mysqli_stmt_prepare($stmt, $jo);

    mysqli_stmt_bind_param($stmt, "ssss", $vam, $dip, $qat, $date);

    $execute = mysqli_stmt_execute($stmt);
    if ($execute) {
        $_SESSION['success_msg'] = "order has been taken";
        redirect("../pay.php");
    } else {
        $_SESSION['error_msg'] = "Something went wrong";
        redirect("../dashboardfood.php");
    }
}

if (!isset($_POST['pro5'])) {
    // redirect("../dashboardfood.php");
} else {

    $seg = 'vegetable soup';
    $opp = '$19.8';
    $fat = 'ordered';
    $date = date("Y-m-d h:i:s");

    $no = "INSERT INTO foodorder(username,price,food_status,date_created) VALUES(?,?,?,?)";

    $stmt = mysqli_stmt_init($dbconnect);

    mysqli_stmt_prepare($stmt, $no);

    mysqli_stmt_bind_param($stmt, "ssss", $seg, $opp, $fat, $date);

    $execute = mysqli_stmt_execute($stmt);
    if ($execute) {
        $_SESSION['success_msg'] = "order has been taken";
        redirect("../pay.php");
    } else {
        $_SESSION['error_msg'] = "Something went wrong";
        redirect("../dashboardfood.php");
    }
}

if (!isset($_POST['pro6'])) {
    // redirect("../dashboardfood.php");
} else {

    $pam = 'pancakes';
    $ram = '$40';
    $rat = 'ordered';
    $date = date("Y-m-d h:i:s");

    $wo = "INSERT INTO foodorder(username,price,food_status,date_created) VALUES(?,?,?,?)";

    $stmt = mysqli_stmt_init($dbconnect);

    mysqli_stmt_prepare($stmt, $wo);

    mysqli_stmt_bind_param($stmt, "ssss", $pam, $ram, $rat, $date);

    $execute = mysqli_stmt_execute($stmt);
    if ($execute) {
        $_SESSION['success_msg'] = "order has been taken";
        redirect("../pay.php");
    } else {
        $_SESSION['error_msg'] = "Something went wrong";
         redirect("../dashboardfood.php");
    }
}

if (!isset($_POST['pro7'])) {
   // redirect("../dashboardfood.php");
} else {


    $fam = 'fried chicken';
    $die = '$60.4';
    $yat = 'ordered';
    $date = date("Y-m-d h:i:s");

    $po = "INSERT INTO foodorder(username,price,food_status,date_created) VALUES(?,?,?,?)";

    $stmt = mysqli_stmt_init($dbconnect);

    mysqli_stmt_prepare($stmt, $po);

    mysqli_stmt_bind_param($stmt, "ssss", $fam, $die, $yat, $date);

    $execute = mysqli_stmt_execute($stmt);
    if ($execute) {
        $_SESSION['success_msg'] = "order has been taken";
        redirect("../pay.php");
    } else {
        $_SESSION['error_msg'] = "Something went wrong";
         redirect("../dashboardfood.php");
    }
}

if (!isset($_POST['pro8'])) {
    // redirect("../dashboardfood.php");
} else {

    $ham = 'hot pizza';
    $sloe = '$200';
    $zat = 'ordered';
    $date = date("Y-m-d h:i:s");

    $xo = "INSERT INTO foodorder(username,price,food_status,date_created) VALUES(?,?,?,?)";

    $stmt = mysqli_stmt_init($dbconnect);

    mysqli_stmt_prepare($stmt, $xo);

    mysqli_stmt_bind_param($stmt, "ssss", $ham, $sloe, $zat, $date);

    $execute = mysqli_stmt_execute($stmt);
    if ($execute) {
        $_SESSION['success_msg'] = "order has been taken";
        redirect("../pay.php");
    } else {
        $_SESSION['error_msg'] = "Something went wrong";
         redirect("../dashboardfood.php");
    }
}
