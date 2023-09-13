<?php
    session_start();

    function errorMsg(){
        if (isset($_SESSION['error_msg'])) {
            $message = "  <div class=\"alert bg-danger alertMsg rounded-0 position-fixed alert-dismissible fade show\" role=\"alert\">
            <strong>";
    
            $message .= htmlentities($_SESSION['error_msg']);
            $message .= " </strong>
            <button type=\"button\" class=\"btn fas fa-times text-white p-2\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>";
    
            $_SESSION['error_msg'] = null;
            return $message;
        }
    }

    
    function successMsg(){
        if (isset($_SESSION['success_msg'])) {
            $message = "  <div class=\"alert bg-success alertMsg rounded-0 position-fixed alert-dismissible fade show\" role=\"alert\">
            <strong>";
    
            $message .= htmlentities($_SESSION['success_msg']);
            $message .= " </strong>
            <button type=\"button\" class=\"btn fas fa-times text-white p-2\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>";
    
            $_SESSION['success_msg'] = null;
            return $message;
        }
    }

    // function adminAuth(){
    //     if ($_SESSION['role'] !== 'admin') {
    //         redirect("food");
    //     }
    // }
    function redirect($loc){
        header("Location: ".$loc);
    }

    function auth(){
        if (!isset($_SESSION['id'])) {
            redirect("../food.php");
        }
    }